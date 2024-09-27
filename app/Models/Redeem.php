<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Redeem extends Model
{
    use HasFactory;
    protected $fillable = [
        'redeem_date',
        'user_id',
        'reward_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function reward(){
        return $this->belongsTo(Reward::class);
    }

    

}
