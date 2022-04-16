<?php


namespace App\Http\Controllers;

use App\Models\flight;
use illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $flights = flight::where([
            ['Destination', '!=', Null],
            [function ($query) use ($request) {
                if (($s = $request->s)) {
                    $query->orWhere('Destination', 'LIKE', '%' . $s . '%')->get();
                }
            }
            ]
        ])
            ->paginate(5);

        return view('home', compact('flights'))->with('s', (request()->input('page', 1)-1)*5);



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


