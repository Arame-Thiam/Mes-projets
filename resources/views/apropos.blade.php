<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/head.css')}}">
    <title>Document</title>
</head>
<body>
  @extends('layouts.header')
        @section('content')
        
        <section class="section section-baige">
    			    <div class="container">
    		     
             <div class='item-classe'>

                  <div>
                        <img src="{{asset('scss/error_bus.svg')}}" alt="" />
                  </div>

                  <div>
                      <h1 class="section-title1">A Propos de nous</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis laborum quasi et 
                            vero aspernatur quam harum nam libero. Error quos ab exercitationem tempore dicta quae
                            dolorem necessitatibus ratione mollitia enim aliquam facere possimus optio obcaecati
                            vitae nobis odit et qui reprehenderit, tenetur doloribus. Quisquam ipsum sapiente 
                            quae, atque necessitatibus tenetur nihil voluptate molestias saepe, nostrum laborum 
                            deleniti repellendus assumenda dolor fugiat. Quod voluptatibus nisi amet totam nam!
                                Temporibus ullam quos tenetur recusandae numquam aperiam nobis, mollitia veritatis
                                unde quo ratione fuga autem ut dolor ex eaque ducimus eum similique nam quibusdam 
                                dolore impedit odit fugit alias! Perferendis, quaerat dolorum.
                        </p>
                      <input type="submit" name="" id="env" class='button' value="Nous Contactez"/>
                </div>

             </div>

    			</div>
    		</section>
                    <section class="section section-white">
                        <div class="container">

                        <h3 class="section-title2">Comment ca nous travaillons</h3>
                        <div class="clientele">
                            <div>
                                <img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" />
                                <h2 class="fonction">Reserver votre billet de voyage</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                            <div>
                                <img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" />
                                <h2 class="fonction">Envoyez vos colis</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                            <div>
                                <img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" />
                                <h2 class="fonction">Effectuer une location</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                            <div>
                                <img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" />
                                <h2 class="fonction">Superviser voter Trajet</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                            <div>
                                <img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" />
                                <h2 class="fonction">Gestion d'accident et pane</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                        </div>
                        </div>
                    </section>
            <section class="section section-second">
    			<div class="container">
    				<h3 class="title1">Nos services clientel</h3>

                        <div class='clientele'>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Securite</h3>
                            </div>
                                <div class='react react-one'>
                                <img src="{{asset('scss/route 2.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Confort</h3>
                            </div>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Pourcentage</h3>
                            </div>
                            <div class='react react-one'>
                                <img src="{{asset('scss/route 4.svg')}}" class="img" srcset="" />
                                <h3 class='fonction'>Services Clients</h3>
                            </div>
                        </div>
    			</div>
    		</section>

            <section class="section section-white">
                <div class="container">

                <h3 class="section-title2">Quelqu'uns de chers patenaires de travailles</h3>

                  <div class="item-client">
                    <div>
                      <img src="{{asset('scss/partenaire.svg')}}" alt="" />
                    </div>
                    <div>
                      <img src="{{asset('scss/partenaire1.svg')}}" alt="" />
                    </div>
                    <div>
                      <img src="{{asset('scss/partenaire2.svg')}}" alt="" />
                    </div>
                    <div>
                      <img src="{{asset('scss/partenaire3.svg')}}" alt="" />
                    </div>
                  </div>
                </div>
    		</section>
           
        @endsection
</body>
</html>