<!DOCTYPE html>
<html lang="pt">  
<head>
<title>Texter</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">   
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
<meta charset="UTF-8">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
      
<body>
     
<nav class="navbar-fixed-top sticky-top navbar shadow-sm p-3 mb-5 bg-white rounded"> 
    
    <div class="navbar-header">
        <a class="navbar-brand"><img src="{{asset('/images/logo.png')}}" alt="" style="height: 65; width: 60px"></a>
    </div> 

    <div>
        <ul id="menu">
            <li><a href="/#home">Home</a></li>
            <li><a href="/#sobre">Sobre</a></li>
            <li><a href="/#features">Features</a></li>
            <li><a href="/#contact">Contacta-nos</a></li>
            <li><a href="{{ route('login') }}">Entrar</a></li>
        </ul>    
    </div>
    
</nav>


<div class="container">
    
<div class="site-index">
 
<div id="home" class="block home-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6  left-block">
                <div class="text-centered">
                    <h1 class="title" style="font-size: 40px !important;">Texter!</h1>
                    <p style="font-size: 18px !important;">Envia mensagens para todos os teus amigos!</p>
                    <p class="Medium-text">Download Em Breve</p>
                    <a href="https://play.google.com/?hl=pt-PT" target="_blank"><img src="{{asset('/images/Playstore.png')}}" alt="Playstore" style="height: 40px; margin-top: 10px;"></a>
                    <a href="https://www.apple.com/pt/ios/app-store/" target="_blank"><img src="{{asset('/images/appstore.png')}}" alt="Apple App Store" style="height: 40px;  margin-top: 10px;"></a>
                </div>
            </div>

<div class="smartphone">
        <div class="content">
        <img src="{{asset('/images/homephone.png')}}" style="width:100%;border:none;height:100%" />
    </div>
</div>
        </div>
        
        <hr class="sombra">
    </div>
</div>
    
<div id="sobre" class="block sobre-block">
        <div class="container text-centered">
            <h1 class="title" style="margin-bottom: 45px;">Bem vindo ao Texter</h1>
            
            <p>Texto.</p>
            
            <p>Texto.</p>
            
            <img src="{{asset('/images/welcome_image (1).png')}}" class="img-fluid" style="vertical-align: middle; display: block; height: 300px;" >
            
            <div class="row no-gutters"  style="padding-top: 10%">
                
                <div class="col block">
                    <h5 style="padding-bottom: 15px"><span><img src="{{asset('/images/share.png')}}" style="width: 90px" class="f-image"></span></h5>
                    <span class="f-info">Envia mensagens aos teus amigos com apenas com um click</span>
                </div>
                
                <div  class="col block" >
                    <h5 style="padding-bottom: 15px"><span><img src="{{asset('/images/social-media.png')}}" style="width: 90px" class="f-image"> </span></h5>
                    <span class="f-info">Recebe e Envia mensagens rapidamente</span>
                </div>
                
                <div  class="col block">
                    <h5 style="padding-bottom: 15px"><span><img src="{{asset('/images/family (1).png')}}" style="width: 90px" class="f-image"> </span></h5>
                    <span class="f-info">Fica em contacto com os teus amigos e familiares</span>
                </div>
            </div>
        </div>
    </div>
    
<div id="features" class="block feature-block">
        <div class="container text-centered">
            <br>
            <br>
            <br>
            <h1 class="title">Features</h1>
            
            <div class="row no-gutters feature-row">
                
                <div class="col block" style="padding-bottom: 12%">
                    <h5>Mensagens Grátis</h5>
                    <h5><span><img src="{{asset('/images/tag.png')}}" style="width: 120px"> </span></h5>
                    <span class="f-info">Serviço totalmente gratuito.</span>
                </div>
                
                <div class="col block">
                    <h5>Ultra Rapidez</h5>
                    <h5><span><img src="{{asset('/images/lighting.png')}}" style="width: 120px"> </span></h5>
                    <span class="f-info">Envia e Recebe mensagens rapidamente.</span>
                </div>
                
                <div class="col block">
                    <h5>Dark Mode</h5>
                    <h5><span><img src="{{asset('/images/moon.png')}}" style="width: 120px"> </span></h5>
                    <span class="f-info">Vista Cansada? <br>Experimenta agora o <br>Dark Mode!</span>
                </div>
                
            </div>
            
        </div>
    </div>

<div id="contact" class="block contact-block">
    
    <div class="container text-centered">
        <h1 class="title" style="padding-bottom: 10%;">Contacta-nos</h1>
    </div>
    
     <form>
        <div class="form-group">
            <input type="text" class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="nome" placeholder="Nome" required>
        </div>
        
        <div class="form-group">
            <input type="email" class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="exampleInputEmail1" placeholder="Endereço de email" required>
        </div>
        
        <div class="form-group">
            <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="Mensagem" rows="6" placeholder="Mensagem" required></textarea>
        </div>        
        
        <div class="text-centered">
            <center><button type="button" class="btn-entrar" style="width: 50%">Enviar</button></center>
        </div>
    </form>
    
 </div> 
    
</div>
    
</div>   


<div class="footer">
    <div class="container">
        <div class="float-left">
            <h6 style="display: inline; margin-bottom: 15%;">PAP - </h6>
            <p style="display: inline-block">Miguel Ferreira 12 14</p>
        </div>
        
        <div class="float-right">
            <a class="footer-links" href="termos-condicoes">Termos e condições</a>
            <a class="footer-links" href="politicas-privacidade">Politica e Privacidade</a>
        </div>
    </div>
</div>
  
</body>
</html>
