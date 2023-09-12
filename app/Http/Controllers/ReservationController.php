<?php

namespace App\Http\Controllers;
use App\Models\Plannings;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function rechercher(Request $request)
    {
        // Récupérer les donnees depuis le formulaire
        $Depart =$request->input('lieu');
        $Arrive =$request->input('destination'); 
        $Date =$request->input('date'); 
        // Vérifiez les données dans la base de données
        //$Depart = Plannings::Find('lieu', $Depart); // Recherchez le voyage par ID
        //$Arrive = Plannings::Find('destination', $Arrive);
        //$Date = Plannings::Find('date', $Date);

        if ($Depart && $Arrive &&  $Date) {
            // Si le voyage existe, affichez la page de détails
            //return view('details', ['voyage' => $voyage]);
            echo "vous pouvais continuiez votre rservation";
        } else {
            // Si le voyage n'existe pas, affichez une page d'erreur
            return view('erreurligne');
        }
    }

    public function search(Request $request) {

        if(isset($_GET['lieu']) && isset($_GET['destination']) && isset($_GET['date'])){

            $lieu = $_GET['lieu'];
            $destination = $_GET['destination'];
            $date = $_GET['date'];

            $recherche = Plannings::table('country')->where('lieu','LIKE',"x".$lieu."x")->paginate();
            $recherche = Plannings::table('country')->where('destination','LIKE',"x".$lieu."x")->paginate();
            $recherche = Plannings::table('country')->where('date','LIKE',"x".$lieu."x")->paginate();
            return view('nana',['recherche'->$recherche]);
        }else {
            // Si le voyage n'existe pas, affichez une page d'erreur
            return view('erreurligne');
        }
    }
}
