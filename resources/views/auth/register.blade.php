@extends('layouts.app')
<head>
<title>Texter</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
@section('content')

<body onload="hide_rebutton()" style="background-color: white">


<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: 3%;">
  <path fill="#00c6ff" fill-opacity="1"
  d="M0,288L48,266.7C96,245,192,203,288,197.3C384,192,480,224,576,218.7C672,213,768,171,864,138.7C960,107,1056,85,1152,85.3C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
</svg>
<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: 5%;">
  <path fill="#00c6ff" fill-opacity="0.3" d="M0,96L60,117.3C120,139,240,181,360,208C480,235,600,245,720,256C840,267,960,277,1080,277.3C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>

<div class="container"> 

    <div class="login-content" style="float: right; padding-top: 10%;">
        <form method="POST" action="{{ route('register') }}" style="width: 360px;">
            @csrf

            <h2 class="title" style="padding-bottom: 10%; margin-left: 20px">Registo!</h2>

            <div class="input-div one">  
                <div class="i">
                    <i class="fas fa-user"></i>
            </div>
            <div class="div">
                <input id="name" type="text" class="input-entrar @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>

            <div class="input-div one">  
                <div class="i">
                    <i class="fas fa-envelope"></i>
            </div>
            <div class="div">
                <input id="email" type="email" class="input-entrar @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            </div>

            <div class="input-div one">  
                <div class="i">
                    <i class="fas fa-venus-mars"></i>
            </div>
            <div class="div">
                <select name="gender" id="gender" class="form-control" style="text-align-last: center; border: 0px">
                    <option value="1">Homem</option>
                    <option value="0">Mulher</option>
                </select>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            </div>

             <div class="input-div one">  
                <div class="i">
                    <i class="fas fa-lock"></i>
            </div>
            <div class="div">
            <input id="password" type="password" class="input-entrar @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
            </div>
            </div>

             <div class="input-div one">  
                <div class="i">
                    <i class="fas fa-lock"></i>
            </div>
            <div class="div">                                   
            <input id="password-confirm" type="password" class="input-entrar" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
            </div>
            </div>

            <button type="submit" class="btn-entrar">Registar</button>
        </form>
    </div>   
 </div>

<script>
function hide_rebutton() {
  var a = document.getElementById("reg");

  if (a.style.display === "none") {
    a.style.display = "block";
  } else {
    a.style.display = "none";
  }
}
</script>
@endsection
