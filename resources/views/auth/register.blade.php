<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.header')
        @section('content')  
            <div class="container">
                <div>
                    <div class="login">
                        <div>
                            <div class="titre">{{ __('Espace Inscription') }}</div>

                            <div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div>
                                        <label for="prenom" class="label">{{ __('Prenom') }}</label>

                                        <div>
                                            <input id="name" type="text" class="item-input" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus placeholder="donner votre prenom">

                                            @error('prenom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="nom" class="label">{{ __('Nom') }}</label>

                                        <div>
                                            <input id="name" type="text" class="item-input" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus placeholder="donner votre nom">

                                            @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="adresse" class="label">{{ __('Adresse') }}</label>

                                        <div>
                                            <input id="name" type="text" class="item-input" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus  placeholder="donner votre adresse">

                                            @error('adresse')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="telephone" class="label">{{ __('Telephone') }}</label>

                                        <div>
                                            <input id="name" type="text" class="item-input" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus placeholder="donner votre telephone">

                                            @error('telephone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="profil" class="label">{{ __('Profil') }}</label>

                                        <div>
                                            <select id="name" type="text" class="item-input1" name="profil" value="{{ old('profil') }}" required autocomplete="profil" autofocus >
                                                <option>chauffeur</option>
                                                <option>client</option>
                                            </select>
                                            @error('profil')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="email" class="label">{{ __('Email Address') }}</label>

                                        <div>
                                            <input id="email" type="email" class="item-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="donner votre email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div>
                                        <label for="password" class="label">{{ __('Password') }}</label>

                                        <div>
                                            <input id="password" type="password" class="item-input" name="password" required autocomplete="new-password" placeholder="donner votre motpasse">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div>
                                        <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                                        <div>
                                            <input id="password-confirm" type="password" class="item-input" name="password_confirmation" required autocomplete="new-password" placeholder="comfirmez votre motpasse">
                                        </div>
                                    </div><br>

                                    <div>
                                        <div>
                                        <a href="{{ route('login') }}" class="btn1">Connexion</a>
                                            <button type="submit" class="btn0">
                                                {{ __('Inscrire') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>s
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
                            <label htmlFor="">your email</label>
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
