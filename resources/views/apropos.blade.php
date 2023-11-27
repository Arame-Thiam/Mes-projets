<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{asset('scss/head.css')}}">
    <link rel="stylesheet" href="{{asset('scss/main.css')}}">
    <title>Document</title>
     <style>
            .slide {
              text-align: center;
              justify-content: center;
            }
            .slide img {
              justify-content: center;
            }
            #id {
              color: orange;
            }
            
     </style>
</head>
<body>
  @extends('layouts.header')
        @section('content')
        
        <section class="section section-baige">
    			    <div class="container">
    		     
             <div class='item-classe'>

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
                          <a href="{{route('contact.create')}}" class="button" id="env">Nous Contactez</a>
                    </div>

                  <div>
                        <img src="{{asset('image/Milestones of business projects-cuate.png')}}" width="550px" />
                  </div>

             </div>

    			</div>
    		</section>
                    <section class="section section-white">
                        <div class="container">
                        <h3 class="section-title2">Comment nous travaillons</h3>
                        
                        <div class="cliente">
                           <div class="slide">
                                <center><img src="{{asset('scss/route 4.svg')}}" class="img" srcset="" /></center>
                                <h2 class="fonction">Reserver votre billet de voyage</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                            <div class="slide">
                                <center><img src="{{asset('scss/route 3.svg')}}" class="img" srcset="" /></center>
                                 <h2 class="fonction">Envoyez vos colis</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                            <div class="slide">
                                <center><img src="{{asset('scss/route 2.svg')}}" class="img" srcset="" /></center>
                                <h2 class="fonction">Effectuer une location</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                            <div class="slide">
                                <center><img src="{{asset('scss/route 1.svg')}}" class="img" srcset="" /></center>
                                <h2 class="fonction">Superviser voter Trajet</h2>
                                <p>En tant que transporteur nous vous donner la possibilité de mettre en valeur 
                                    voyages afin d'avoir plus de clients. Vous aurez la possibilité de modifier, 
                                </p>
                            </div>
                            <div class="slide">
                                <center><img src="{{asset('scss/error_bus.svg')}}" id="id" class="img" width="60" /></center>
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
    				<h3 class="section-title2">Nos services clientel</h3>

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