<head>
<title>Loading...</title>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">   
<link rel="stylesheet" href="{{ asset('css/loader.css')}}">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
<meta charset="UTF-8">
</head>

<script>
 
function letterbyletter(){
var dots = window.setInterval( function() {
    var wait = document.getElementById("wait");
    if ( wait.innerHTML.length > 2) 
        wait.innerHTML = "";
    else 
        wait.innerHTML += ".";
    }, 500);

}

    
function text(){
var a = ["A Inserir dados na base de dados", "A registar", "Registado!"];
    
    if(0 < 1)
    {
        document.getElementById("array").innerHTML += a[0];
        setTimeout(function(){document.getElementById("array").innerHTML = a[1]; }, 1000);
        setTimeout(function(){document.getElementById("array").innerHTML = a[2]; }, 2700);
    }
}
    
function teste(){
    
var d = document.getElementById("d");
    
    
    if(document.getElementById("myBar").offsetWidth === 400){
        document.getElementById("wait").style.display = "none"
        d.classList.add("fadeout");
    }
}

setTimeout(teste,4100);


setTimeout(function(){
    window.location.href = '/home';
}, 4500);



   
</script>

<body onload="letterbyletter(); text();">
    
    <div class="container" id="d">

<div class="waveWrapper waveAnimation">
    <div id="myProgress" class="centered"><div id="myBar"></div></div>
    <div class="centered" style="padding-top: 5%"><h4 id="array"></h4>
    <h4 id="wait">.</h4> 
    </div>
    
  <div class="waveWrapperInner bgMiddle">
     
    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
  </div>
    
  <div class="waveWrapperInner bgBottom">
    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
  </div>
</div>
        
   </div> 
    
    
</body>
