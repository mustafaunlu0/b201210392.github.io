<?php
include("index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="giriskontrol2.css">
</head>
<body>
    <div class="content">
      <div class="duzen">
          <?php
        if(isset($_POST['kadi']) &&isset($_POST['sifre']))
        {
            $kullanici=$_POST['kadi'];
            $sifre=$_POST['sifre'];
            if($kullanici=="b201210392@sakarya.edu.tr" && $sifre=="b201210392"){
                echo "Hoşgeldiniz b201210392 ";
            }
            else{
                echo "Hatalı Giriş!";
            }
        }       
        ?>
      </div>
       
        
    </div>
</body>
</html>