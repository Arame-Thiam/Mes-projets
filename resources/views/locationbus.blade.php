<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <title>Document</title>
</head>
<body>
  @extends('layouts.header')
        @section('content')
        
        <section class=" section section-loading">
                <h1 id='titre'>Ecrivez votre demande de location</h1>
          </section>
          <div class="section">
                    <div class="form-parent"> 
                        <div class="formulaire">
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
                    </div>
          </div>
        @endsection
</body>
</html