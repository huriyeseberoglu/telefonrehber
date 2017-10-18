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
        $veriler = telefonrehberi::whereRaw('id!=?', array(0))->get();
        $kullanıcı=telefonrehberi::whereRaw('id=?',array($id))->first();
        return view('guncelle',array('kullaniciguncelle'=>$kullanıcı));

    }

    public function getSil($id=0)
    {
        if ($id!=0)
        {
            $kullanicisil=telefonrehberi::where('id','=',$id)->delete();
            if ($kullanicisil)
            {
              return redirect()->route('listele');
            }
            else
            {
                return null;
            }
        }
        else
        {
            return null;
        }
    }
}
