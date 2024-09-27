<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Redeem;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Update the specified user in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'address' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'email'=>'required|email',
        ]);

        // Retrieve the user and update their profile
        $user = Auth::user();
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->email; // Be cautious with updating email as it can affect login
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
    
    public function showSignupForm(){
        return view('signup');
    }

// Handle the signup form submission
    public function handleSignup(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'terms'=> 'accepted',
        ]);

        $user = new User([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'points' => 0, // default points
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $user->save();

        return redirect()->route('login')->with('success', true);;
    }
    public function showInfo(){
        if (Auth::check()) {
            $userId = Auth::id(); // Get the logged-in user's id
    
            // Calculate total points from the transactions with dates that have already passed
            $totalPointsEarned = Transaction::where('user_id', $userId)
                ->where('transaction_date', '<', now())
                ->sum('points_earned');
    
            // Calculate total points redeemed by joining with the Reward table
            $totalPointsRedeemed = Redeem::where('redeems.user_id', $userId)
                ->join('rewards', 'redeems.reward_id', '=', 'rewards.id')
                ->sum('rewards.points');
    
            // Calculate net points
            $netPoints = $totalPointsEarned - $totalPointsRedeemed;
    
            // Get the user and update their points
            $user = User::find($userId);
            $user->points = $netPoints; // Update with net points
            $user->save();
    
            // Pass the user and total points to the view
            return view('profile', ['user' => $user, 'totalPoints' => $netPoints]);
        } else {
            return view('profile');
        }
    }
    
    



}
