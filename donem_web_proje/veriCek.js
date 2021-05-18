
var denemeYil;
var denemeTuru;
var denemeBaslik;
var denemePoster;
function top50Film() {
  $("#goster").hide();


  var top = ['Avengers: İnfinity War','Interstellar', 'Inception','La La Land', 'Avatar', 'The Artist','Life of Pi', 'Iron Man'];
  for (let index = 0; index < top.length; index++) {
    $.get("https://www.omdbapi.com/?t=" + top[index] + "&apikey=ba1f4581", function (rawdata) {
      var title = rawdata.Title;
      var posterurl = rawdata.Poster;
      document.getElementById(index).innerHTML = " <img class='d-block w-100 imgBoyutu' src= '" + posterurl + "'><br><span>" + title + "</span>";
    });
  }


  $.get("https://www.omdbapi.com/?t=" + top[1] + "&apikey=ba1f4581", function (rawdata) {
    denemeBaslik = rawdata.Title;
    denemePoster = rawdata.Poster;
    denemeYil = rawdata.Year;
    denemeTuru = rawdata.Genre;


  })

}
function gonder(q) {

  $("#myModal1").modal();
  var gelenParametre = q;
  var top = ['Avengers: İnfinity War','Interstellar', 'Inception','La La Land', 'Avatar', 'The Artist','Life of Pi', 'Iron Man'];

  $.get("https://www.omdbapi.com/?t=" + top[gelenParametre] + "&apikey=ba1f4581", function (rawdata) {
    var title = rawdata.Title;
    var posterurl = rawdata.Poster;
    var years = rawdata.Year;
    var imdburl = rawdata.imdbRating;
    var turu = rawdata.Genre;
    var filminAciklamasi = rawdata.Plot;
    var sure = rawdata.Runtime;
    var yonetmen = rawdata.Director;
    var oyuncular = rawdata.Actors;
   
  
      
      document.getElementById('imdb').innerHTML = "<span>IMDB: <a class='aImdb'>" + imdburl + " </a>";
    document.getElementById('foto').innerHTML = " <img src= '" + posterurl + "'>";
    document.getElementById('baslik').innerHTML = "<span> Adı: </span><span class='yaziRengi'>" + title + "</span>";
    document.getElementById('aciklama').innerHTML = "<span> Açıklaması: </span><span class='yaziRengi'>" + filminAciklamasi + "</span>";
    document.getElementById('sure').innerHTML = "<span> Süresi: </span><span class='yaziRengi'>" + sure + "</span>";
    document.getElementById('turu').innerHTML = "<span> Türü: </span><span class='yaziRengi'>" + turu + "</span>";
    document.getElementById('director').innerHTML = "<span> Yönetmen: </span><span class='yaziRengi'>" + yonetmen + "</span>";
    document.getElementById('actors').innerHTML = "<span> Oyuncular: </span><span class='yaziRengi'>" + oyuncular + "</span>";
    document.getElementById('yil').innerHTML = "<span> Yılı: </span><span class='yaziRengi'>" + years + "</span>";
  });
}
