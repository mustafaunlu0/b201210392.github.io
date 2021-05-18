<?php
include("index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giriş</title>
    <link rel="stylesheet" href="login4.css">
</head>

<body>
    <div class="content">
        <form id="login" name="giris_formu" onsubmit="return kontrol(this)" action="giriskontrol.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">E- Mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kadi">
           
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Şifre</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="sifre">
            </div>
            <button type="submit" class="btn btn-primary">Gönder</button>
        </form>
    </div>
    <script>
        function kontrol(form)
        {
            var eposta=form.kadi.value;
            var sifre=form.sifre.value;
            if(eposta==null || sifre==null){
                alert("Lütfen boş alan bırakmayın!");
                 document.getElementById("exampleInputEmail1").setAttribute("autocomplete","off");
                 document.getElementById("exampleInputPassword1").setAttribute("autocomplete","off");
                return true;
            }
            else if(eposta=="b201210392@sakarya.edu.tr" && sifre=="b201210392"){
                alert("Hoşgeldin Mustafa Ünlü!");
                 document.getElementById("exampleInputEmail1").setAttribute("autocomplete","off");
                 document.getElementById("exampleInputPassword1").setAttribute("autocomplete","off");
                return true;
            }
            else{
                alert("Hatalı Giriş!");
                document.getElementById("exampleInputEmail1").setAttribute("autocomplete","off");
                 document.getElementById("exampleInputPassword1").setAttribute("autocomplete","off");
                return true;
            }
            return false;
        }
        
        
        
    
    </script>
</body>

</html>
<?php
include("footer.php");
?>
