<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Fetch the user by email
        $user = User::where('email', $request->email)->first();

        // Check if user exists
        if (!$user) {
            return back()->withErrors(['email' => 'The provided email is not registered.']);
        }

        // Check if the passwords match
        if ($user->password !== $request->password) {
            return back()->withErrors(['password' => 'The provided password is incorrect.']);
        }

        // Log the user in (Assuming you are using some kind of session or custom logic here)
        Auth::login($user);

        // Redirect to home page or intended page
        return redirect()->intended('/profile');
    }

    public function showLoginForm(){
        return view('login');
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    


}
