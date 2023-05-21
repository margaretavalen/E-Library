//initialize
var judul = document.getElementById('search_title');
var result = document.getElementById('hasil');
var title = document.getElementById('cari_judul');
var hasil = document.getElementById('result');

function forIndex(){
  //add event when title is typed
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
    if((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
      result.innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open('GET', 'cari_buku.php?judul=' + judul.value, true);
  xmlhttp.send();
}

function forIndex2(){
  //add event when title is typed in index2
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
    if((xmlhttp.readyState == 4) && (xmlhttp.status == 200)){
      hasil.innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open('GET', 'cari_buku2.php?judul=' + title.value, true);
  xmlhttp.send();
}

function pilihBuku(idt){
  var xhr = new XMLHttpRequest();

  xhr.open('GET', 'buku.php?id=' + idt)

  xhr.onload = function() {
      buku.innerHTML = xhr.responseText
  }

  xhr.send()
}