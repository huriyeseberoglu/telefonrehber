<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Models\Telefonrehberi;
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
            'adresi' => 'required',
            'digertel' => 'required'
        ));
        if (!$kontrol->fails())
        {
            $isim= $request->input('adi');
            $soyad= $request->input('soyadi');
            $telefon= $request->input('telefonu');
            $adres= $request->input('adresi');
            $digertel= $request->input('digertel');
            $kaydet= Telefonrehberi::create(array(
                'ad' => $isim,
                'soyad' => $soyad,
                'telefon' => $telefon,
                'adres' => $adres,
                'diger_telefon' => $digertel
            ));
            if ($kaydet)
            {
                return redirect()->route('listele');
            }
        }
        return redirect()->route('listele');
    }

    public function postGuncelle(Request $request)
    {
        $kontrol= Validator::make($request->all(), array(
            'adi' => 'required',
            'soyadi' => 'required',
            'telefonu' => 'required',
            'adresi' => 'required',
            'digertelefon' => 'required'
        ));
        if (!$kontrol->fails())
        {
            $idsi= $request->input('id');
            $adi= $request->input('adi');
            $soyad= $request->input('soyadi');
            $telefon= $request->input('telefonu');
            $adres= $request->input('adresi');
            $digertelefon= $request->input('digertelefon');
            $kullanici= Telefonrehberi::find($idsi);

            $kullanici->ad=$adi;
            $kullanici->soyad=$soyad;
            $kullanici->telefon=$telefon;
            $kullanici->adres=$adres;
            $kullanici->diger_telefon=$digertelefon;
            $kullanici->save();
            return redirect()->route('listele');
        }
        return redirect()->to('/')->withErrors($kontrol)->withInput();
    }

}
