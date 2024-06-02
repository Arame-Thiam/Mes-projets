<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <title>Document</title>
    <style>
      .body {
         background-color: #dedede;
      }
      .titre {
        font-size: 34px;
        font-weight: 700;
        text-align: left;
        color: #0D3973;
        margin: 0px;
        font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
      }
      .flex {
        display: flex;
        justify-content: space-between;
       
      }
      .flexs {
        display: flex;
        justify-content: space-between;
         align-items: center;
      }
      .billet {
        background-color: white;
        padding: 24px;
        border-radius: 8px;
        width: 50%;
      }
      
    </style>
</head>
<body class="body">
     @extends('layouts.header')
        @section('content')
        @foreach ($trajects as $ligne)
       <div class="section">
            <div class="container">
            
                <div class="billet">
                      <div class="flexs">
                          <div><h3>Sen Voyage Galsen</h3></div>
                          <div><p>Depart a : {{$ligne->heure}}</p></div>
                      </div>
                      <hr>
                      <div class="flex">
                          <div>
                              <div>
                                  <h4><Strong>{{$ligne->lieu}}</Strong></h4>
                              </div>

                              <div>
                                  <h4><Strong>{{$ligne->arrivee}}</Strong></h4>
                              </div>
                          </div>
                          <div>
                               <p>{{$ligne->date}}</p>
                               <h2 class="tit">{{$ligne->prix}} FCFA</h2>
                               <a href="{{route('infos.app', $ligne->id)}}" type="submit" name="" id="env" class='button'>Reservez</a>
                               
                            </div>
                      </div>
                </div>
            
            </div>
       </div>
      @endforeach
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