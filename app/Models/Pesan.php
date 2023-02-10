<?php

namespace App\Models;

use App\Traits\HasFormatRupiah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFormatRupiah;
    public function metodebayars()
    {
        return $this->hasOne(Metodebayar::class,"id","metodebayars_id");
    }


}
