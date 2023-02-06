<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodebayar extends Model
{
    public function pesan()
    {
        return $this->belongsTo(Pesan::class);
    }
}
