<?php

namespace App\Http\Controllers;

use App\Models\Recyclebank;
use App\Models\Servtype;
use App\Models\Wastetype;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TransactionController extends Controller
{

    public function viewPickUp(){
        $recyclebanks = Recyclebank::all();
        $wastetypes = Wastetype::all();
        $servtypes = Servtype::all();
        return view('pickup', [
            'recyclebanks' => $recyclebanks,
            'wastetypes' => $wastetypes,
            'servtypes'=>$servtypes]);
    }
    public function viewDropOff(){
        $recyclebanks = Recyclebank::all();
        $wastetypes = Wastetype::all();
        $servtypes = Servtype::all();
        return view('dropoff', [
            'recyclebanks' => $recyclebanks,
            'wastetypes' => $wastetypes,
            'servtypes'=>$servtypes]);
    }

    
    public function storeDropOff(Request $request){
        $request->validate([
            'transaction_date' => 'required|after_or_equal:today',
            'wastetype_id' => 'required|exists:wastetypes,id',
            'recyclebank_id' => 'required|exists:recyclebanks,id',
            'waste_weight' => 'required|numeric|min:100',
        ]);

        $wasteType = WasteType::find($request->wastetype_id);
        $pointsEarned = ($request->waste_weight / 100) * $wasteType->points;

        $transaction = new Transaction([
            'user_id' => Auth::id(),
            'transaction_date' => $request->transaction_date,
            'wastetype_id' => $request->wastetype_id,
            'recyclebank_id' => $request->recyclebank_id,
            'servtype_id' => 2,
            'waste_weight' => $request->waste_weight,
            'points_earned' => $pointsEarned,
        ]);

        $transaction->save();

        $user = Auth::user();
        if (Carbon::parse($request->transaction_date)->lt(now())) {
            $user->points += $pointsEarned;
            $user->save();
        }
        // Update user points
        

        return redirect()->route('success');
    }


    public function storePickUp(Request $request){
        $request->validate([
            'transaction_date' => 'required|after_or_equal:today',
            'wastetype_id' => 'required|exists:wastetypes,id',
            'recyclebank_id' => 'required|exists:recyclebanks,id',
            'waste_weight' => 'required|numeric|min:100',
        ]);
        $wasteType = WasteType::find($request->wastetype_id);
        $pointsEarned = ($request->waste_weight / 100) * $wasteType->points;

        $transaction = new Transaction([
            'user_id' => Auth::id(),
            'transaction_date' => $request->transaction_date,
            'wastetype_id' => $request->wastetype_id,
            'recyclebank_id' => $request->recyclebank_id,
            'servtype_id' => 1,
            'waste_weight' => $request->waste_weight,
            'points_earned' => $pointsEarned
        ]);

        $transaction->save();

        $user = Auth::user();
        if (Carbon::parse($request->transaction_date)->lt(now())) {
            $user->points += $pointsEarned;
            $user->save();
        }
    
        // Redirect back with a success message
        return redirect()->route('success');
    
    }

    public function showTransactions()
    {

        $transactions = Transaction::with(['wastetype', 'servtype', 'recyclebank'])
                                ->where('user_id', auth()->id())
                                ->paginate(4); ;

        return view('transactionhistory', compact('transactions'));
    }

    public function cancelTransaction($id){
        $transaction = Transaction::where('id', $id)
            ->where('user_id', Auth::id()) // Ensure the logged-in user can only cancel their transactions
            ->firstOrFail();

        if ($transaction) {
            $transaction->delete(); // Soft delete the transaction
            return redirect()->back()->with('success', 'Transaction has been cancelled.');
        }

        return back()->with('error', 'Transaction not found.');
    }


    
    
}
