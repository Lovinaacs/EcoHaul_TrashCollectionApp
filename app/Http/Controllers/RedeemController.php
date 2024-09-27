<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Reward;
use App\Models\Redeem;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class RedeemController extends Controller
{
    
    public function redeemRewards(Request $request){
        $user = Auth::user();
        $reward = Reward::find($request->reward_id);
        $pointsDeducted = $reward->points;
    
        if ($user->points >= $reward->points && $reward->stock > 0) {
            DB::transaction(function () use ($user, $reward, $pointsDeducted, $request) {
                $reward->decrement('stock');
                $user->decrement('points', $pointsDeducted);
    
                Redeem::create([
                    'redeem_date' => now(),
                    'user_id' => $user->id,
                    'reward_id' => $reward->id,
                ]);
    
                // Re-authenticate the user to refresh the auth session.
                Auth::setUser($user);
                session(['user' => Auth::user()]);
            });
    
            return back()->with('success', 'Reward redeemed successfully!');
        }
        else if ($reward->stock == 0){
            return back()->with('error', 'Stock Unavailable');
        }
        else {
            return back()->with('error', 'Not enough points to redeem this reward.');
        }
    }
    
    public function showRedeemHistory()
    {

        $redeems = Redeem::with(['user', 'reward'])
                                ->where('user_id', auth()->id())
                                ->paginate(4); ;

        return view('redeemhistory', compact('redeems'));
    }
    
}
