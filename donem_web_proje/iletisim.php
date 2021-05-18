<?php
include("index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
    <link rel="stylesheet" href="iletisim3.css">
</head>

<body>
    <div class="content">
        <form action="formkontrol.php" method="post" onsubmit="return kontrol(this)">
            <table id="form">
                <tr>
                    <th colspan="2" id="iletisimBilgi">İletişim Bilgileri</th>
                </tr>
                <tr>
                    <th>
                        <label for="isim">Adınız:</label>
                    </th>
                    <th>
                        <input type="text" name="isim">
                    </th>

                </tr>
                <tr>
                    <th>
                        <label for="soyad">Soyadınız:</label>
                    </th>
                    <th>
                        <input type="text" name="soyisim">

                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="email">E-Mail</label>
                    </th>
                    <th>
                        <input type="text" name="mail">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="dogum">Doğum Tarihi:</label>
                    </th>
                    <th>
                        <input type="date" value="2000-02-28" name="dogum">
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="sehir">Şehir:</label>
                    </th>
                    <th>
                        <select name="sehirSecim">
                            <option value="İstanbul">İstanbul</option>
                            <option value="Ankara">Ankara</option>
                            <option value="İzmir">İzmir</option>
                            <option value="Bursa">Bursa</option>
                            <option value="Çanakkale">Çanakkale</option>
                        </select>
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="cinsiyet">Cinsiyet:</label>
                    </th>
                    <th>
                        <input type="radio" value="erkek" name="cinsiyet">Erkek
                        <input type="radio" value="erkek" name="cinsiyet">Kadın
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="konu">Konu:</label>
                    </th>
                    <th>
                        <input type="checkbox" id="yetersiz" name="konu" value="Yetersiz">Yetersiz İçerik
                        <input type="checkbox" id="yanlis" name="konu" value="Yanlış Bilgi">Yanlış Bilgi
                        <input type="checkbox" id="diger" name="konu" value="Diğer">Diğer
                    </th>
                </tr>
                <tr>
                    <th>
                        <label for="adres">Mesajınız:</label>
                    </th>
                    <th>
                        <textarea name="mesaj" id="mesaj" cols="35" rows="10"></textarea>
                    </th>
                </tr>
                <tr>
                    <th colspan="2" id="iletisimBilgi"><input type="submit" class="button" value="Gönder" id="buton1">
                        <input type="reset" class="button" value="Temizle" id="buton2">
                    </th>
                </tr>
            </table>
            <br>


        </form>
    </div>
    <script>
        function kontrol(frm) {
            var isim = frm.isim.value;
            var soyisim = frm.soyisim.value;
            var email = frm.mail.value;
            var atpos = email.indexOf("@");
            var dotpos = email.lastIndexOf(".");
            var cinsiyet = document.getElementsByName("cinsiyet");
            var cinsiyetAdet = cinsiyet.length;
            var value = "";
            var cbox_yetersiz = document.getElementById("yetersiz");
            var cbox_yanlis = document.getElementById("yanlis");
            var cbox_diger = document.getElementById("diger");

            if (isim == null || isim == "" || isim.length < 4) {
                alert("Kullanıcı adı 4 karakterden az olamaz!");
                return false;
            }
            if (soyisim == null || soyisim == "") {
                alert("Lütfen soyisim alanını boş bırakmayanız!");
                return false;
            }
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 > email.length) {
                alert("Lütfen geçerli bir e-mail giriniz!");
                return false;
            }
            for (var i = 0; i < cinsiyetAdet; i++) {
                if (cinsiyet[i].checked) {
                    value = cinsiyet[i].value;
                }
            }
            if (value == "") {
                alert("Lütfen cinsiyetinizi seçiniz!");
                return false;
            }
            if (cbox_yetersiz.checked == 0 && cbox_yanlis.checked == 0 && cbox_diger.checked == 0) {
                alert("Lütfen bir konu başlığı seçiniz");
                return false;
            }
            return true;

        }

    </script>

</body>

</html>

<?php
include("footer.php");
?>
