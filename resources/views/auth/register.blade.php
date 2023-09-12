<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="login">
            <div class="card">
                <div class="titre">{{ __('Espace Inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="prenom" class="label">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="item-input" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus placeholder="donner votre prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="nom" class="label">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="item-input" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus placeholder="donner votre nom">

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="adresse" class="label">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="item-input" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus  placeholder="donner votre adresse">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telephone" class="label">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="item-input" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus placeholder="donner votre telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="profil" class="label">{{ __('Profil') }}</label>

                            <div class="col-md-6">
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

                        <div class="row mb-3">
                            <label for="email" class="label">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="item-input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="donner votre email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="item-input" name="password" required autocomplete="new-password" placeholder="donner votre motpasse">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="item-input" name="password_confirmation" required autocomplete="new-password" placeholder="comfirmez votre motpasse">
                            </div>
                        </div><br>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <a href="{{ route('login') }}" class="btn1">Connexion</a>
                                <button type="submit" class="btn">
                                    {{ __('Inscrire') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
