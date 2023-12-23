<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <link rel="stylesheet" href="{{asset('scss/main.css')}}">
    <title>Document</title>
    <style>
        .paragrap {
            color: black;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 14px;
            line-height: 20px;
        }
        .secteur {
            background-color: white;
            padding: 16px;
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
    </style>
</head>
<body>
    @extends('layouts.header')
        @section('content')
        <main>
        <section class=" sections section-loading">
                <div class="container">
                        <div class="flexs">
                            <div>
                                <h1 id='titre'>Bienvenue chez <strong>SEN VOYAGE GALSEN</strong> La meilleur agence de transport logistique au senegal</h1>
                                <p class="par">Avec sen voyage vous pouvez egalement effectuer un demamde d'envoi de colis ou encore une demande de location de bus, mini-bus. SEN VOYAGE, une agence de transport de haut niveau</p>
                                <a href="{{route('contact.create')}}" class="btn0">Nous Contactez</a>       
                            </div>
                            <div>
                                <div class='form'>
                                        <form action="get" action="#">
                                            @method('get')
                                                <h2 class="tit">Rechercher une Ligne</h2>
                                                <div class="flex">
                                                    <div class="flex">
                                                        <input type="radio" name="" id="" class="radio">
                                                        <label for="">Aller</label>
                                                    </div>
                                                    <div class="flex">
                                                        <input type="radio" name="" id="">
                                                        <label for="">Aller et Retour</label>
                                                    </div>
                                                </div>
                                                    <div class='item-er'>
                                                                <div class="long">
                                                                    <label class="lab">Depart</label>
                                                                    <select name="" class='nana' id='nana'>
                                                                        <option value="">iwol</option>
                                                                        <option value="">dakar</option>
                                                                        <option value="">kedougou</option>
                                                                        <option value="">thies</option>
                                                                        <option value="">matam</option>
                                                                        <option value="">mbour</option>
                                                                        <option value="">fatick</option>
                                                                        <option value="">tamba</option>
                                                                        <option value="">kaolack</option>
                                                                        <option value="">saint-louis</option>
                                                                        <option value="">diourbel</option>
                                                                        <option value="">louga</option>
                                                                    </select>
                                                                </div>
                                                                <div class="long">
                                                                    <label class="lab">Arrivee</label>
                                                                    <select name="" class='nana'id='nana'>
                                                                        <option value="">dakar</option>
                                                                        <option value="">kedougou</option>
                                                                        <option value="">thies</option>
                                                                        <option value="">matam</option>
                                                                        <option value="">mbour</option>
                                                                        <option value="">fatick</option>
                                                                        <option value="">tamba</option>
                                                                        <option value="">kaolack</option>
                                                                        <option value="">saint-louis</option>
                                                                        <option value="">diourbel</option>
                                                                        <option value="">louga</option>
                                                                    </select>
                                                                </div>
                                                                <div class="long">
                                                                    <label class="lab">Date depart</label>
                                                                    <input type="date" class='nana' />
                                                                </div>
                                                                <div class="long">
                                                                    <label class="lab">Nombre de passager</label>
                                                                    <input type="number" class='nana' placeholder='nombre de passager' />
                                                                </div>
                                                                <div class="style">
                                                                    <a href="" class='bttn'>Confirm</a>
                                                                </div>
                                                                <br>
                                                            </div> 
                                                        </form>
                                                    </div>
                                            </div>
                                        </form>  
                                </div>
                            </div>  
                        </div>           
                </div>  
            </section>
            <section class="section section-white">
                    <div class="container">
                        <h3 class="section-title2">Choissisez une ligne de transport</h3>

                        <div class="bili">
                            @foreach($reft as $ligne)
                                <div class="secteur">
                                    <img src="{{ asset('storage/'.$ligne->image) }}" width="280px" height="180px">
                                    <h4>{{$ligne->numero}}</h4>
                                    <p class="paragrap">
                                        Lorem Ipsum is simply  text of the printing <br>
                                        and type setting industry.pecimen variations <br>
                                        of assages of Lorem Ipsum available
                                    </p>
                                    <a href="{{route('trajets.show',$ligne->id)}}" class="button">Voir</a>
                                </div>
                            @endforeach
                        </div>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="{{ asset('js/script.js')}}"></script>
</body>
</html>



