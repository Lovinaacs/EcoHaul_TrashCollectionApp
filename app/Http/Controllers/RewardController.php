<?php

namespace App\Http\Controllers;
use App\Models\Reward;
use App\Models\Redeem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardController extends Controller
{
    public function showRewards()
    {
        $rewards = Reward::paginate(4); 
        return view('rewards', ['rewards' => $rewards]);
    }

    


}
