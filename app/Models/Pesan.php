<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    public function metode_bayar() 
    {
        return $this->hasOne(Metodebayar::class, 'id', 'metodebayars_id');
    }
}
