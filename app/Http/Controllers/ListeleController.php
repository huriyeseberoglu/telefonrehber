<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\telefonrehberi;
use Illuminate\Support\Facades\Input;

class ListeleController extends Controller
{
    public function getlistele()
    {
        $veriler = telefonrehberi::whereRaw('id!=?', array(0))->get();
        return view('listele', array('kullanıcıliste' => $veriler,'aranan' => ''));
    }

    public function getSonuc()
    {
        $aranan=Input::get('aramasorgusu');
        $aranankelime="%$aranan%";
        $sonuclar=telefonrehberi::whereRaw('ad like ? or soyad like ? or telefon like ? or adres like ?',array($aranankelime,$aranankelime,$aranankelime,$aranankelime))->get();

        return view('listele', array('kullanıcıliste' => $sonuclar,'aranan' => $aranan));
    }

    public function getGuncelle($id=0)
    {
        return view('guncelle');
    }
}
