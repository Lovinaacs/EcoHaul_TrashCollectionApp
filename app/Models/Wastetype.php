<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wastetype extends Model
{
    public function trheader(){
        return $this->hasMany(Transaction::class);
    }
}
