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

<body onload="hide_logbutton()" style="background-color: white">
      


<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#00c6ff" fill-opacity="0.3" d="M0,224L60,229.3C120,235,240,245,360,240C480,235,600,213,720,181.3C840,149,960,107,1080,128C1200,149,1320,235,1380,277.3L1440,320L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>
<svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="margin-top: 2%;">
  <path fill="#00c6ff" fill-opacity="1" d="M0,96L60,117.3C120,139,240,181,360,208C480,235,600,245,720,256C840,267,960,277,1080,277.3C1200,277,1320,267,1380,261.3L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
</svg>

<div class="container">

                <div class="login-content" style="float: right; padding-top: 10%;">
                    <form method="POST" action="{{ route('login') }}" style="width: 360px;">
                        @csrf

                <h2 class="title" style="padding-bottom: 10%; margin-left: 20px">Bem Vindo!</h2>

                <div class="input-div one">  
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                <div class="div">
                    <input id="email" type="email" class="input-entrar @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

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
                                <input id="password" type="password" class="input-entrar @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <button type="submit" class="btn-entrar">Entrar</button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceste-te da Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function hide_logbutton() {
  var a = document.getElementById("log");

  if (a.style.display === "none") {
    a.style.display = "block";
  } else {
    a.style.display = "none";
  }
}
</script>


@endsection
