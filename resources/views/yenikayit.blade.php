<title>Yeni Kullanıcı</title>
<link rel="stylesheet" href="css\app.css">
<br><br><br>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"  style="font-size: 25;">Yeni Kullanıcı Eklemek İçin Formu Doldurunuz</div>
        <br>
        <div class="panel-body">
            <form class="form-horizontal" action="{{ url('/kaydet') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-md-4">Ad:</label>
                    <div class="col-md-4">
                        <input type="text" name="adi" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Soyad:</label>
                    <div class="col-md-4">
                        <input type="text" name="soyadi" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Telefon:</label>
                    <div class="col-md-4">
                        <input type="text" name="telefonu" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4">Adres:</label>
                    <div class="col-md-4">
                        <input type="text" name="adresi" class="form-control">
                    </div>
                </div>
                 <br>

                <div class="form-group">
                    <div class="col-md-4">
                        <input type="submit" name="kaydet" class="btn btn-primary" value="Kaydet">
                    </div>
                </div>
            </form>
            <a href="/" style=" font-size: 15px; "> Anasayfa'ya Geri Dön</a>
            <br>
            <a href="/listele" style=" font-size: 15px; "> Kayıtlı Kullanıcılar</a>
        </div>
    </div>
</div>
