<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           .body {
                background-color: #dedede;
           }
           .flex {
                display: grid;
                grid-template-columns: 1fr, 1fr;
                margin: auto;
           }
           .section {
                padding: 50px 0;
           }
           .titre {
                font-size: 20px;
                font-weight: 700;
                text-align: center;
                color: #0D3973;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            }
           .loge {
            background-color: white;
            width: 45%;
            border-radius: 6px;
            margin-bottom: 60px;
            padding: 24px;
           }
           .log {
            background-color: white;
            width: 45%;
            border-radius: 6px;
            margin-bottom: 60px;
            padding: 24px;
           }
           .lab {
                font-weight: 600;
                display: inline;
                color: black;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
                display: block;
                margin-bottom: 8px;
            }
            .items {
                padding: 16px;
                width: 100%;
                margin: auto;
                background: #dedede;
                border: 1px solid #dedede;
                border-radius: 8px;
                border-left: 5px solid orange;
            }
    </style>
</head>
    <body class="body">
     @extends('layouts.header')
        @section('content')


            <main class="section">
                    <div class="container">
                            <div class="flex">
                                  <div class="loge">
                                      <div class="titre">{{ __('Informatios du Passager') }}</div>
                                      <form action="">
                                        
                                                         <div>
                                                              <label class="lab">Presom</label>
                                                              <input type="text" class="items" placeholder="donner votre prenom">
                                                         </div>
                                                         <div>
                                                              <label class="lab">Nom</label>
                                                              <input type="text" class="items" placeholder="donner votre nom">
                                                         </div>
                                                         <div>
                                                                <label class="lab">Telephone</label>
                                                                <input type="number" class="items" placeholder="donner votre numero telephone">
                                                         </div>
                                                         <div>
                                                                <label class="lab">Email</label>
                                                                <input type="email" class="items" placeholder="donner votre adresse email">
                                                         </div><br>
                                                        <div>
                                                            <button class="button">Confirm</button>
                                                        </div>  
                                      </form>
                                  </div>
                                  <div class="full">
                                     <div class="log">
                                         <div class="titre">{{ __('Informatios du Voyage') }}</div>
                                         <div>
                                              <h6><strong>Ville depart :</strong></h6>
                                              <h6><strong>Ville arrivee :</strong></h6>
                                              <h6><strong>Heure depart :</strong></h6>
                                              <h6><strong>Date :</strong></h6>
                                         </div>
                                     </div>
                                     <div class="log">
                                         <div class="titre">{{ __('Informatios du Paiement') }}</div>
                                         <div>
                                              <h6><strong>Prix initial :</strong></h6>
                                              <h6><strong>Commission :</strong></h6>
                                              <h6><strong>Prix total :</strong></h6>
                                         </div>
                                     </div>
                                     <div class="log">
                                         <div class="titre">{{ __('Attentions') }}</div>
                                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci totam facilis asperiores repudiandae quae dolorum dolore quis cupiditate ab aliquid dolorem non iure, eaque at. Esse illum officia molestiae quo ipsa eaque quibusdam veniam, maxime adipisci id et sint qui! Numquam, officiis? Ipsum soluta totam quod minima recusandae saepe accusamus.</p>
                                     </div>
                                  </div>
                            </div>
                    </div>
            </main>

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