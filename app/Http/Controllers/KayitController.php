<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\telefonrehberi;
use Validator;

class KayitController extends Controller
{
    function kayit()
    {
         return view('yenikayit');
    }
    
    public function postKaydet(Request $request)
    {
        $kontrol= Validator::make($request->all(), array(
            'adi' => 'required',
            'soyadi' => 'required',
            'telefonu' => 'required',
            'adresi' => 'required'
        ));
        if ($kontrol->fails())
        {
            return redirect()->to('/')->withErrors($kontrol)->withInput();
        }
        else
        {
            $ad= $request->input('adi');
            $soyad= $request->input('soyadi');
            $telefon= $request->input('telefonu');
            $adres= $request->input('adresi');

            $kaydet= telefonrehberi::create(array(
               'ad' => $ad,
               'soyad' => $soyad,
               'telefon' => $telefon,
               'adres' => $adres
            ));
            if ($kaydet)
            {
                return redirect()->route('listele');
            }
        }
    }
}
