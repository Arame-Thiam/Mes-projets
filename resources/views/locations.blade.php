<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <link rel="stylesheet" href="{{asset('scss/main.css')}}">
    <title>Document</title>
    <style>
           /* Review style starts  */
.box-container {
    display:flex;
    justify-content: center; 
    gap: 30px;  
}

.p{
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
            font-style: 10px;
            font-weight: 400;
            line-height: 28px;
        }
.box .user {
    display: flex;
    align-items: center;
    text-align: left;
    padding:.5rem 0;
    border-top:.1rem solid #3334;

}
.box .user img {
    width:4rem; 
    height:4rem; 
    border-radius: 50%;
    object-fit: cover;
    margin:.8rem 1rem; 
}
.box .user .info h3 {
    font-size:1.4rem; 
    color:black;
}
.box .user .info span {
    font-size:1rem; 
    color: red;
}
/* Review style ends  */
.prod {
         background-color: white;
         border-radius: 8px;
         padding: 24px;
         box-shadow: 0 .1rem .1rem rgba(0,0,0,2  );
      }
.voir {
            background-color: orange;
            padding: 6px;
            text-decoration: none;
            color: white;
            border-radius: 8px;
        }
 .flex {
          display: flex;
          justify-content: space-between;
        }
        .par {
            color: #F4F3F3;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            font-size: 20px;
            font-style: normal;
            font-weight: 400;
            line-height: 160%;
            flex-shrink: 0;
            padding-bottom: 20px;
          }
        .tit {
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
        }
        .btn0 {
            display: flex;
            width: 178.513px;
            height: 40.527px;
            padding: 14px 17px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: white;
            gap: 10px;
            flex-shrink: 0;
            padding-bottom: 20px;
            background-color: orange;
          }
          strong {
            color: orange;
          }
          span{
            color: red;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            font-weight: 800;
          }

          .user  {
            justify-content: center;
        }
        .flexe {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 80px
        }
        .slide {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .igms {
            display: block;
            margin: auto;
        }

        .paragrap {
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 14px;
            line-height: 20px;
        }
        .secteur {
            background-color: white;
            padding: 16px;
            border-radius: 8px;
            border: 3px solid #dedede;
            box-shadow: 0px 5px 15px -3px rgba(15, 179, 175, 0.18);
        }
        h4 {
            color: #3C3C3B;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
            font-weight: 800;
            line-height: normal;
        }
        button {
            border-radius: 5px;
            border: 1px solid #04366C;
            background: #04366C;
            box-shadow: 0px 5px 15px -3px rgba(15, 179, 175, 0.18);
            padding: 12px;
            color: white;
            cursor: pointer;
            
        }
        .p{
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 16px;
            font-style: 10px;
            font-weight: 400;
            line-height: 28px;
        }
        .flexes {
            display: flex;
            justify-content: space-between;
            align-items:center;
        }
    </style>
</head>
<body>
    @extends('layouts.header')
        @section('content')
        <main>
            <section class=" section section-loading">
                <div class="container">
                                
                </div>
                <div class="container">
                        <div class="flexs">
                            <div>
                                <h1 id='titre'>Avec <strong>SEN VOYAGE</strong> sur un click simple seulement effectuer votre location de bus ou de mini-bus</h1>
                                <p class="par">Avec sen voyage vous pouvez egalement effectuer un demamde d'envoi de colis ou encore une demande de location de bus, mini-bus. SEN VOYAGE, une agence de transport de haut niveau</p>
                                <a href="{{route('contact.create')}}" class="btn0">Nous Contactez</a>     
                            </div>
                            <div>
                                <img src="{{asset('image/city bus-cuate.svg')}}" width="600px" height="500px">
                            </div>  
                        </div>           
                </div>
            </section>

            
            <section class="section section-white">
                    <div class="container">
                        <h3 class="section-title2">Choissisez une ligne de transport</h3>

                        <div class="bili">
                          @foreach($loc as $bus)
                          @if($bus->etat === "En_location")
                                <div class="secteur">
                                    <img src="{{asset('storage/'.$bus->image) }}" width="280px" height="180px">
                                    <h4>{{$bus->description}}</h4>
                                    <div class="flexes">
                                        <div>
                                            <h5>{{$bus->places}} Places</h5>  
                                        </div>
                                        <div>
                                            <h5>Mode Electrique</h5>
                                        </div>
                                    </div>
                                   <div class="flexes">
                                        <div>
                                            <h5>Location par Jour</h5> 
                                            <h5>5000f FCA</h5>  
                                        </div>
                                        <div>
                                            <a href="{{route('locations.detail',$bus->id)}}" class="button">Louer</a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                    </div>
            </section>

    		<section class="home" id="home">

             <h3 class="section-title2">Nos Services</h3>

            
                <div class="box-container"> 

                    <div class="box">
                        <img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" />
                        <h3>Reservation billets</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, error?</p>
                    </div>
                    <div class="box">
                        <img src="{{asset('scss/route 2.svg')}}" class="img" srcset="" />
                        <h3>Location de Bus</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, error?</p>
                    </div>
                    <div class="box">
                        <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                        <h3>Envoi de Colis</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, error?</p>
                    </div>
                </div>
            </section>

    		<section class="section review section-white">
    			<div class="container">
    				<h3 class="section-title2">Ce qu'ils pensent de nous</h3>

                    <div class="box-co">

                        <div class="flexe">
                            <div>
                                <img src="{{asset('image/arrow-left-circle-fill (1).svg')}}" alt="" srcset="">
                            </div>

                                <div class="slide">
                                    

                                <div class="box">
                                    <img src="{{asset('image/quote.svg')}}" class="igms" srcset="">
                                        <p class="p">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Ipsam officiis cum inventore aliquid nesciunt, magni consequuntur autem,<br> iusto unde temporibus iste? Quo tenetur minus, voluptatem praesentium eaque,<br> atque maiores ex sint, fugit excepturi natus aut voluptate. Soluta quas laboriosam omnis.<br> Provident saepe, pariatur alias ducimus ut laudantium tenetur quibusdam minus sit.
                                        </p>
                                    <div class="user">
                                        <img src="{{asset('image/pic-3.png')}}" alt="">
                                        <div class="info">
                                            <h3>Oumoul khairy SALL</h3>
                                            <span>jan 5, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                               <img src="{{asset('image/arrow-left-circle-fill.svg')}}" alt="" srcset="">
                            </div>
                        </div>

                    </div>

    			</div>
    		</section>

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