<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\telefonrehberi;

class ListeleController extends Controller
{
    public function getlistele()
    {
        $veriler=telefonrehberi::whereRaw('id!=?',array(0)) ->get();
        return view('listele',array('kullanıcıliste'=>$veriler));
    }
}
