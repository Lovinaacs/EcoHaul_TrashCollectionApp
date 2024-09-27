<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servtype extends Model
{
    use HasFactory;
    public function trheader(){
        return $this->hasMany(Transaction::class);
    }
}
