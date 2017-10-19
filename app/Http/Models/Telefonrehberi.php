<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Telefonrehberi extends Model
{
    protected $table = "telefonrehber";
    protected $fillable = ['ad','soyad','telefon','adres'];

}




