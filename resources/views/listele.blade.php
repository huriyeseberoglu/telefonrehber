<title>Kayıtlı Kullanıcılar</title>
<link rel="stylesheet" href="\css\app.css">
<br>
<div class="container" >
    <div class="panel panel-default" >
        <div class="panel-heading" style="font-size: 25;"> Kayıtlı Kullanıcılar</div>
        <div class="panel-body">
            <form action="sonuc" method="get">
                <table>
                <td  ><input type="text" name="aramasorgusu"  value="{{$aranan}}" class="col-md-12"></td>
                </table>
                <br>
                <table>
                <td><input type="submit" value="Ara"  class="col-md-12"></td>
                </table>
            </form>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Adı :</th>
                    <th>Soyadı :</th>
                    <th>Telefon Numarası :</th>
                    <th>Adresi :</th>
                    <th>İşlemler :</th>
                </tr>
            @foreach($kullanıcıliste as $kullanıcı)
                <tr>
                  <td>{{ $kullanıcı -> ad }}</td>
                  <td>{{ $kullanıcı -> soyad }}</td>
                  <td>{{ $kullanıcı -> telefon }}</td>
                  <td>{{ $kullanıcı -> adres }}</td>
                  <td><a href="{{url('/guncelle/'.$kullanıcı->id)}}">Güncelle</a> -  <a href="{{url('/sil/'.$kullanıcı->id)}}">Sil</a></td>
                </tr>
            @endforeach
            </table>
            <a href="/" style=" font-size: 15px; "> Anasayfa'ya Geri Dön</a>
            <br>
            <a href="/yenikayit" style=" font-size: 15px; "> Yeni Kullanıcı Ekle</a>
        </div>
    </div>
</div>