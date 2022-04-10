<?php


namespace App\Http\Controllers;

use App\Models\flight;
use illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        //$laras = DB::select("SELECT * FROM laras");
        // return $laras



           return view('home');


    }
}
/* public function search(Request $request)
    {
        if($request->has('q')){
            $q=$request->q;
            $flights = Flight::where('Destination', 'like', '%'.$q.'%')->orderBy('id_Flight', 'desc')->get();}
        else{
            $flights = Flight::orderBy('id_Flight', 'desc')->get();
        }
        return view('search', ['flights' => $flights]);
    }
*/


