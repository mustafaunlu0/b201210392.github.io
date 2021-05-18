<?php
include("index.php");
  if(isset($_POST['isim']) &&isset($_POST['soyisim']) &&isset($_POST['mail']) &&isset($_POST['dogum']) &&isset($_POST['sehirSecim'])
          &&isset($_POST['cinsiyet']) &&isset($_POST['konu']) &&isset($_POST['mesaj'])){
       $adi=$_POST['isim'];
        $soyadi=$_POST['soyisim'];
        $mail=$_POST['mail'];
        $dogum = strtotime($_POST['dogum']);
        $dogumt = date('d-m-Y', $dogum);
        $sehir=$_POST['sehirSecim'];
        $cinsiyet=$_POST['cinsiyet'];
        $konu=$_POST['konu'];
        $mesaj=$_POST['mesaj'];
  }
       
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="iletisim3.css">
</head>

<body>
    <div class="content">
        <table border="1" cellspacing="0" id="form">
           
            <tr>
                <td colspan="2" id="iletisimBilgi">Formdan Gelen Bilgiler</td>
            </tr>
            <tr>
                <td>Ad:</td>
                <td><?php echo $adi; ?></td>
            </tr>
            <tr>
                <td>Soyad:</td>
                <td><?php echo $soyadi; ?></td>
            </tr>
            <tr>
                <td>Mail:</td>
                <td><?php echo $mail; ?></td>
            </tr>
            <tr>
                <td>Doğum Tarihi:</td>
                <td><?php echo $dogumt; ?></td>
            </tr>
            <tr>
                <td>Şehir:</td>
                <td><?php echo $sehir; ?></td>
            </tr>
            <tr>
                <td>Cinsiyet:</td>
                <td><?php echo $cinsiyet; ?></td>
            </tr>
            <tr>
                <td>Konu:</td>
                <td><?php echo $konu; ?></td>
            </tr>
            <tr>
                <td>Mesaj:</td>
                <td><?php echo $mesaj; ?></td>
            </tr>

        </table>

    </div>
</body>

</html>
