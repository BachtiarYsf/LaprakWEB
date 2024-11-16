function sembunyi(){
    var paragraph = document.getElementById("hil");
    if(paragraph.classList.contains("hilang")){

        alert("Apakah Anda Yakin Ingin Menampilkannya?")
        paragraph.classList.remove("hilang");
    }else{

        alert("Isi akan di sembunyikan");
        paragraph.classList.add("hilang");
    }
}

function html(){
    var paragraph = document.getElementById("htm");
    if(paragraph.classList.contains("html")){

        alert("Apakah Anda Yakin Ingin Menampilkannya?")
        paragraph.classList.remove("html");
    }else{

        alert("Isi akan di sembunyikan");
        paragraph.classList.add("html");
    }
}

function css(){
    var paragraph = document.getElementById("cs");
    if(paragraph.classList.contains("css")){

        alert("Apakah Anda Yakin Ingin Menampilkannya?")
        paragraph.classList.remove("css");
    }else{

        alert("Isi akan di sembunyikan");
        paragraph.classList.add("css");
    }
}

function js(){
    var paragraph = document.getElementById("js");
    if(paragraph.classList.contains("java")){

        alert("Apakah Anda Yakin Ingin Menampilkannya?")
        paragraph.classList.remove("java");
    }else{

        alert("Isi akan di sembunyikan");
        paragraph.classList.add("java");
    }
}

function simpan(){
    var paragraph = document.getElementById("soal");
    if(paragraph.classList.contains("soal2")){

        alert("Apakah Anda Yakin Ingin Menampilkannya?")
        paragraph.classList.remove("soal2");
    }else{

        alert("Isi akan di sembunyikan");
        paragraph.classList.add("soal2");
    }
}

function berubah(){
    var body = document.body;
    body.classList.toggle("putih");
    body.classList.toggle("hitam");

    var header = document.querySelector("header");
    header.classList.toggle("putih");
    header.classList.toggle("hitam");
    
    var paragraph = document.querySelector("p")
    paragraph.forEach(function(paragraph){ 
        paragraph.classList.toggle("putih"); 
        paragraph.classList.toggle("hitam");
    });
}
window.onload = function() { 
    document.body.classList.add("putih"); 
    var header = document.querySelector("header"); 
    header.classList.add("putih");

    var paragraphs = document.querySelectorAll("p"); 
    paragraphs.forEach(function(paragraph) { 
        paragraph.classList.add("putih"); 
    });
}
