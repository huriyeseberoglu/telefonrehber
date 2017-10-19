<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Telefonrehberi;
use Illuminate\Support\Facades\Input;

class ListeleController extends Controller
{
    public function getlistele()
    {
        $veriler = Telefonrehberi::whereRaw('id!=?', array(0))->get();
        return view('listele', array('kullanıcıliste' => $veriler,'aranan' => ''));
    }

    public function getSonuc()
    {
        $aranan=Input::get('aramasorgusu');
        $aranankelime="%$aranan%";
        $sonuclar=Telefonrehberi::whereRaw('ad like ? or soyad like ? or telefon like ? or adres like ?',array($aranankelime,$aranankelime,$aranankelime,$aranankelime))->get();

        return view('listele', array('kullanıcıliste' => $sonuclar,'aranan' => $aranan));
    }

    public function getGuncelle($idsi=0)
    {
        $kullanici=Telefonrehberi::whereRaw('id=?',array($idsi))->first();
        return view('guncelle',array('kullaniciguncelle'=>$kullanici));

    }

    public function getSil($idd=0)
    {
        if ($idd!=0)
        {
            $kullanicisil=Telefonrehberi::where('id','=',$idd)->delete();
            if ($kullanicisil)
            {
              return redirect()->route('listele');
            }
                return null;
        }
            return null;
    }
}
