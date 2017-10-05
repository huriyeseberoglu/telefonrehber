<title>Kayıtlı Kullanıcılar</title>
<link rel="stylesheet" href="css\app.css">
<br><br><br>
<div class="container" >
    <div class="panel panel-default" >
        <div class="panel-heading" style="font-size: 25;"> Kayıtlı Kullanıcılar</div>
        <div class="panel-body">
            <table class="table table-bordered">
                <tr>
                    <th>Adı :</th>
                    <th>Soyadı :</th>
                    <th>Telefon Numarası :</th>
                    <th>Adresi :</th>
                </tr>
            @foreach($kullanıcıliste as $kullanıcı)
                <tr>
                  <td>{{ $kullanıcı -> ad }}</td>
                  <td>{{ $kullanıcı -> soyad }}</td>
                  <td>{{ $kullanıcı -> telefon }}</td>
                  <td>{{ $kullanıcı -> adres }}</td>
                </tr>
            @endforeach
            </table>
            <a href="/" style=" font-size: 15px; "> Anasayfa'ya Geri Dön</a>
            <br>
            <a href="/yenikayit" style=" font-size: 15px; "> Yeni Kullanıcı Ekle</a>
        </div>
    </div>
</div>