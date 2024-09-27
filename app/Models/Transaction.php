<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Request;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'recyclebank_id',
        'servtype_id',
        'wastetype_id',
        'waste_weight',
        'transaction_date',
        'points_earned'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function recyclebank(){
        return $this->belongsTo(Recyclebank::class);
    }
    public function servtype(){
        return $this->belongsTo(Servtype::class);
    }
    public function wastetype(){
        return $this->belongsTo(Wastetype::class);
    }

    
}
