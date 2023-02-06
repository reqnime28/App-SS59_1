<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    public function metodebayars()
    {
        return $this->hasOne(Metodebayar::class,"id","metodebayars_id");
    }


}
