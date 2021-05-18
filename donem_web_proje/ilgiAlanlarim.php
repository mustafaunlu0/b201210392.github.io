<?php
include("index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.css">
    <link rel="stylesheet" href="ilgialanim.css">
</head>

<body onload="top50Film()">
  
    <div class="content">
       <h1 id="sayfaBasligi"  style="text-align:center">İzlediğim Bazı Filmler</h1>
       <div class="ortaFilmlerinHepsiniKapsayan" id="gizle">
        <div class="ortaFilmlerinHepsiniKapsayan-Kapsayici">
            <div class="card" style="width: 18rem;">
                <div id="0" onclick="gonder('0')" class="card-body">

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div id="1" onclick="gonder('1')" class="card-body">

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div id="2" onclick="gonder('2')" class="card-body">

                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <div id="3" onclick="gonder('3')" class="card-body">

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div id="4" onclick="gonder('4')" class="card-body">

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div id="5" onclick="gonder('5')" class="card-body">

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div id="6" onclick="gonder('6')" class="card-body">

                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <div id="7" onclick="gonder('7')" class="card-body">

                </div>
            </div>
            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="foto" class="modal-title"></h4>
                        </div>
                        <div id="baslik" class="modal-body">

                        </div>
                        <div id="turu" class="modal-body">

                        </div>
                        <div id="aciklama" class="modal-body">

                        </div>
                        <div id="sure" class="modal-body">

                        </div>
                        <div id="yil" class="modal-body">

                        </div>
                        <div id="imdb" class="modal-body">

                        </div>

                        <div id="director" class="modal-body">

                        </div>
                        <div id="actors" class="modal-body">

                        </div>

                        <div class="modal-footer">
                            <button type="button" id="yeniRenk" class="btn btn-default"
                                data-dismiss="modal">Kapat</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="veriCek.js"></script>

</body>

</html>

<?php
include("footer.php");
?>
