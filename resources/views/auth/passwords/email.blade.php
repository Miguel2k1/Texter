@extends('layouts.app')
<head>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
</head>
@section('content')

<body onload="hide_logbutton()" style="background-color: white">
      
<img src="{{URL::asset('/images/wave.png')}}" class="wave">

<div class="container">



                <div class="login-content" style="float: right; padding-top: 10%;">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                       <h2 class="title" style="padding-bottom: 10%; margin-left: 20px; font-size: 19px !important">Esqueceste-te da tua Password?</h2>

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

                       
                                <button type="submit" class="btn-entrar">Resetar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
