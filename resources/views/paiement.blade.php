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
                grid-template-columns: 1fr 1fr;
                justify-content: center;
                align-items: flex-start;
                gap: 20px;
           }
           .section {
                padding: 50px 0;
           }
           .title {
                font-size: 20px;
                font-weight: 700;
                color: #0D3973;
                font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
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
            width: 100%;
            border-radius: 6px;
            margin-bottom: 10px;
            padding: 24px;
           }
           .log {
            background-color: white;
            width: 100%;
            border-radius: 6px;
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
            .full{
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                gap:10px;
            }
    </style>
</head>
    <body class="body">
     @extends('layouts.header')
        @section('content')


            <main class="section">
                    <div class="container">
                    <div class="title">{{ __('Paiement en ligne') }}</div>
                            <div class="flex">
                           
                                    <div>
                                                <div class="loge">
                                                    <input type="radio">&nbsp;&nbsp;&nbsp;
                                                    <img src="{{asset('../image/p1.webp')}}" width="50px" height="50px";>&nbsp;&nbsp;&nbsp;
                                                    <span>Wave</span>
                                                </div>
                                                <div class="loge">
                                                    <input type="radio">&nbsp;&nbsp;&nbsp;
                                                    <img src="{{asset('../image/p2.png')}}" width="50px" height="50px";>&nbsp;&nbsp;&nbsp;
                                                    <span>Orange Money</span>
                                                </div>
                                                <div class="loge">
                                                    <input type="radio">&nbsp;&nbsp;&nbsp;
                                                    <img src="{{asset('../image/p3.jfif')}}" width="50px" height="50px";>&nbsp;&nbsp;&nbsp;
                                                    <span>Kpay</span>
                                                </div>
                                                <div class="loge">
                                                    <input type="radio">&nbsp;&nbsp;&nbsp;
                                                    <img src="{{asset('../image/p4.png')}}" width="50px" height="50px";>&nbsp;&nbsp;&nbsp;
                                                    <span>Free Money</span>
                                                </div>
                                                <div>
                                                <a href="#"  type="submit" name="" id="env" class='button' onclick="alert('demande de reservation passer avec success, nous envoyons un sms dans instant')">Confirm</a>
                                                </div>  
                                        </div>
                                        <div class="full">
                                     <div class="log">
                                         <div class="titre">{{ __('Informatios du Voyage') }}</div>
                                         <div>
                                              <h6><strong>Ville depart :</strong>  {{$ligne->lieu}}</h6>
                                              <h6><strong>Ville arrivee :</strong>  {{$ligne->arrivee}}</h6>
                                              <h6><strong>Heure depart :</strong>  {{$ligne->heure}}</h6>
                                              <h6><strong>Date :</strong>  {{$ligne->date}}</h6>
                                         </div>
                                     </div>
                                     <div class="log">
                                         <div class="titre">{{ __('Informatios du Paiement') }}</div>
                                         <div>
                                              <h6><strong>Prix initial :</strong>  {{$ligne->prix}}</h6>
                                              <h6><strong>Commission :</strong>  150F cfa</h6>
                                              <h6><strong>Prix total :</strong> {{$ligne->prix}}+150</h6>
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