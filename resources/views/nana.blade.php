<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('scss/reservation.css')}}">
    <title>Document</title>
    <style>
           .sarl {
            padding: 8px 16px;
            background-color: white;
            gap: 20px;
           }
           .bili {
            display: flex;
            gap: 30px;
           }
           .form {
            background-color: white;
            padding: 16px;
        
           }
    </style>
</head>
<body>
     @extends('layouts.header')
        @section('content')
        <div class="section">
        <div class="container">
            <div class="bili">
                    <div class="form">
                            <form action="">
                                <table>
                                        <tr>
                                            <td>
                                                <label for="">Prenom</label>
                                                <input type="text" class="item-input">
                                            </td>
                                            <td>
                                                <label for="">Nom</label>
                                                <input type="text" class="item-input">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="">Email</label>
                                                <input type="text" class="item-input">
                                            </td>
                                            <td>
                                                <label for="">Telephone</label>
                                                <input type="text" class="item-input">
                                            </td>
                                        </tr>
                                </table>
                            </form> 
                    </div>
                <div class="vite">
                     <h4>Informations du voyage</h4>
                     <div class="sarl">
                         <div>DAKAR->KEDOUGOU</div>
                         <p><strong>Date de Depart :</strong></p>
                         <p><strong>Heure de Depart :</strong></p>
                         <p><strong>Villes D'arrets :</strong></p>
                     </div>
                     <div class="sarl">
                         <h5>Detaille du Billets</h5>
                         <p><strong>Toltal:</strong></p>
                         <p><strong>Commission :</strong></p>
                         <p><strong>Total a Payer :</strong></p>
                     </div>
                     <div class="sarl">
                        <h5>Attention????</h5>
                        <p>
                            Toutefois, nous sommes au regret de vous informer 
                            que nous ne pouvons accepter cette annulation car 
                            la marchandise est en cours d'expédition. En effet,
                            sa fabrication a été réalisée à la date demandée
                            lors de votre commande.
                        </p>
                     </div>
                </div>
            </div>
        </div>      
        </div>
        @endsection
</body>
</html>