<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <title>Document</title>
    <style>
          .img {
            width: 408px;
            height: 516px;
            flex-shrink: 0;
            width: 408px;
            height: 516px;
            top: 192px;
            left: 689px;
            background: url('image/autobus-scolaire-dessin-anime-fond-blanc_1308-132853.avif'), lightgray 50% / cover no-repeat;
          }
    </style>
</head>
<body>
     @extends('layouts.header')
        @section('content')
            <div class="section">
                    <div class="form-parent"> 
                        <div class="formulaire">
                            @if(session('success'))
                                <p class="success">{{session('success')}}</p>
                            @endif
                            <h1><strong>Ecrivez<span>-Nous</span></strong></h1>
                            <p>Pour Plus D'information veillez nous ecrire sur le formulaire ci-dessou</p>
                            <form action="{{route('contact.store')}}" method="POST">
                                @csrf
                                    <div>
                                        <label htmlFor="">Prenom et Nom</label>
                                        <input type="text" class="item-input" name="name" placeholder="donner votre nom complet" />
                                    </div>
                                    <div>
                                        <label htmlFor="">Adresse Email</label>
                                        <input type="text" class="item-input" name="email" placeholder="donner votre email" />
                                    </div>
                                    <div>
                                        <label htmlFor="">Telephone</label>
                                        <input type="number" class="item-input" name="telephone" placeholder="donner votre telephone" />
                                    </div>
                                    <div>
                                        <label htmlFor="">Votre Message</label>
                                        <textarea name="description" id="" cols="30" rows="4" placeholder="ecrivez ici votre message" class="messgae"></textarea>
                                    </div><br>
                                    <button type="submit" id="but">Envoyer</button>
                            </form>
                        </div>
                        <div class="section-image">
                            <div class="img">
                                image
                            </div>
                        </div>
                    </div>
                </div>
            </body>

        @endsection
</html>