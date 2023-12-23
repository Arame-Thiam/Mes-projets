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
          }
          .imaro {
            width: 408px;
            height: 608px;
            position: absolute;
            left: -120px;
          }
          .body {
                background-color: #dedede;
                margin: 0;
          }
    </style>
</head>
<body class="body">
     @extends('layouts.header')
        @section('content')
            <div class="section">
                    <div class="form-parent"> 
                        <div class="formulaire">
                           @if(session('success'))
                                <p class="success">{{session('success')}}</p>
                            @endif
                            <h1><strong>Ecrivez<span>-Nous</span></strong></h1>
                            <p>Pour Plus D'information <br> veillez nous ecrire sur le formulaire ci-dessou</p>
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
                               <img src="{{asset('image/contact.png')}}"  class="imaro">
                        </div>
                    </div>
                </div>
            </body>


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
</html>