<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.header')
        @section('content')
        <main>
            <section class=" section section-loading">
                <h1 id='titre'>En un click seulement</br>effectuer votre demande d'envoi de colis</h1>
                    <div class='form'>
                        <form action="">
                            <div class='item-er'>
                            <div class="long">
                                <label htmlFor="">Depart</label>
                                <select name="" class='nana' id='nana'>
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
                                <label htmlFor="">Arrivee</label>
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
                                <label htmlFor="">Date depart</label>
                                <input type="date" class='nana' />
                            </div>
                            <div class="style">
                                <a href="" class='btn'>Confirm</a>
                            </div>
                            </div> 
                        </form>
                    </div>
            </section>
            <section class="section section-white">
                    <div class="container">
                        <h3 class="section-title">Choissisez une ligne de transport</h3>
                    </div>
            </section>

    		<section class="section section-second">
    			<div class="container">
    				<h3 class="title1">Nous faisons</h3>

                        <div class='clientele'>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Envoi de documents</h3>
                            </div>
                                <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Envoi de marchandises</h3>
                            </div>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Envoi de materiel de construction</h3>
                            </div>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Envoi de cultures</h3>
                            </div>
                        </div>
    			</div>
    		</section>

    		<section class="section section-white">
    			<div class="container">
    				<h3 class="section-title2">Ce qu'ils disesnt de nous</h3>

                        
    			</div>
    		</section>
        </main>
        @endsection
    
   
   
  
  
   
</body>
</html>