<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           .sect {
            background-image: url("{{asset('image/bus.svg')}}");
            background-size: cover;
           }
           label {
                font-weight: 600;
                display: inline;
                color: black;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
                display: block;
                margin-bottom: 8px;
            } 
            .item-input {
                padding: 16px;
                width: 98%;
                background: gainsboro;
                border: 1px solid gainsboro;
                border-radius: 8px;
                border-left: 5px solid orange;
            }
            #but {
                background-color: orange;
                border: 1px solid orange;
                padding: 16px;
                color: white;
                border-radius: 8px;
            }
            .formulaire {
                background-color: white;
                width: 40%;
                padding: 24px;
                border-radius:  8px;
            }
            .form-parent {
                display: flex;
                justify-content: center;
            }
            .messgae {
                width: 98%;
                background: gainsboro;
                border: 1px solid gainsboro;
                border-radius: 8px;
                border-left: 5px solid orange;
            }
            .success {
                background-color: green;
                padding: 16px;
                color: white;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
                width: 100%;
                border-radius: 8px;
            }
    </style>
</head>
<body>
     @extends('layouts.header')
        @section('content')

        <div class="section sect">
              <div class="form-parent"> 
                        <div class="formulaire">
                           @if(session('success'))
                                <p class="success">{{session('success')}}</p>
                            @endif
                            <h1><strong>Location de Bus</strong></h1>
                            <form action="{{route('locations.store')}}" method="POST">
                                @csrf
                                    <div>
                                        <label htmlFor="">Nom de l'entreprise</label>
                                        <input type="text" class="item-input" name="name" placeholder="donner votre nom complet" />
                                    </div>
                                    <div>
                                        <label htmlFor="">Adresse Email</label>
                                        <input type="text" class="item-input" name="email" placeholder="donner votre email" />
                                    </div>
                                    <div>
                                        <label htmlFor="">Numero Telephone</label>
                                        <input type="number" class="item-input" name="telephone" placeholder="donner votre telephone" />
                                    </div>
                                    <div>
                                        <label htmlFor="">Votre Message</label>
                                        <textarea name="description" id="" cols="30" rows="4" placeholder="ecrivez ici votre message" class="messgae"></textarea>
                                    </div><br>
                                    <button type="submit" id="but">Envoyer</button>
                            </form>
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
                <p class='item-pied'>Nous une entreprise specialisee sur la gestion des transport logitique.</p>
                </div>
                <div>
                <h4 class='item-h4'>Informations</h4>
                <p class='item-pied'>kdg,tripano face LT RN</p>
                <p class='item-pied'>charodesignestudio@gmail.com</p>
                <p class='item-pied'>+221 77 737 59 11</p>
                </div>
                <div>
                <div class='item-p'>
                    <p class='ronded'><a href="" class='rond'>FB</a></p>
                    <p class='ronded'><a href="" class='rond'>IN</a></p>
                    <p class='ronded'><a href="" class='rond'>LN</a></p>
                    <p class='ronded'><a href="" class='rond'>YB</a></p>
                </div>
                <p class='item-pied'>Nous faisons des reservation en ligne, loaction de bus et demande d'envoi de colis.</p>
                </div>
                <div>
                <h4 class='item-h4'>Nous Joindre par Newsletter</h4>
                <div>
                    <label htmlFor="" class='item-pied'>Votre adresse email</label>
                    
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
                    <center><p class="pid">Created by | <strong>GERALD CHARO KEITA</strong> | @2023</p></center>
                </div>
            </div>
        </div>
        @endsection
</body>
</html>