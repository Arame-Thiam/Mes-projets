<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Document</title>
    <style>
          .killer {
              padding: 20px 0;
              background-image: url("asset('./../image/lig.png)")
          }
          body {
                background-image: url("{{asset('../image/bus.svg')}}");
                margin: 0;
            }
    </style>
</head>
<body>
@extends('layouts.header')
        @section('content')
<div class="killer">

</div>
<div class="container">
    <div>
        <div class="logine">
            <div>
                <div class="titre">{{ __('Espace de Connexion') }}</div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" class="label">{{ __('Adresse Email') }}</label>

                            <div>
                                <input id="email" type="email" class="item-inpute" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="donner votre adresse email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="label">{{ __('Mot de Passe') }}</label>

                            <div>
                                <input id="password" type="password" class="item-inpute" name="password" required autocomplete="current-password" placeholder="donner votre mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="coly">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                                <div>
                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div>
                            <div>
                                <div>
                                    <a href="{{ route('register') }}" class="btn1">Sincrire</a>
                                    <button type="submit" class="btn0">
                                        {{ __('Se Connecter') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <footer>
            <div class="container">
            <div class='footer-item'>
                <div>
                <div>
                    <img src="{{asset('image/logo.png')}}" width='100px' height='60px'>
                </div>
                <p class='item-pied'>adipisicing elit. Optio ratione itaque sequi rem vel ipsa numquam at nam unde explicabo!</p>
                </div>
                <div>
                <h4 class='item-h4'>Get in Touch</h4>
                <p class='item-pied'> 8819 Ohio St. South Gate, CA 90280.</p>
                <p class='item-pied'>charodesignestudio@gmail.com</p>
                <p class='item-pied'>+221 337899087.</p>
                </div>
                <div>
                <div class='item-p'>
                    <p class='ronded'><a href="" class='rond'>FB</a></p>
                    <p class='ronded'><a href="" class='rond'>IN</a></p>
                    <p class='ronded'><a href="" class='rond'>LN</a></p>
                    <p class='ronded'><a href="" class='rond'>YB</a></p>
                </div>
                <p class='item-pied'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, assumenda?.</p>
                </div>
                <div>
                <h4 class='item-h4'>Join a Newsletter</h4>
                <div>
                    <label htmlFor="" class='item-pied'>your email</label>
                    <input type="text" class='inpute' placeholder='ecrire ici...'/>
                </div><br />
                    <input type="submit" name="" id="env" class='button'/>
                </div>
            </div>
            </div>
            </footer>
            <div class="pied-footer">
                <div class="container">
                    <div class="foot">
                        <center><p>Created by | <strong>GERALD CHARO KEITA</strong> | @2023</p></center>
                    </div>
                </div>
            </div>
    @endsection
</body>
</html>
