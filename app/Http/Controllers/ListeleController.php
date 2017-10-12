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
    
    public function getSonuc()
    {
        $arama = $_GET['aramasorgusu'];
        $sonuc = "SELECT * FROM telefonrehber WHERE baslik LIKE '%".$arama."%'" ;
        if($sonuc>0)
        {
            while($sorguoku=$sonuc)
            {
                echo $sorguoku['baslik'].'<br>';
            }
        }
        else
        {
            echo 'Aradığınız İçerik Bulunamadı';
        }
    }
}
