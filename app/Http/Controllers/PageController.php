<?php
namespace App\Http\Controllers;
use App\Models\flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Http\JsonResponse;
class PageController extends Controller
{
    public function create(): JsonResponse
    {
      //  $flights = new flights();
       // $flights->Destination = 'tokyo';
       // $flights->save();
        /*
         * Вносит заготовленные записи в таблицу flight
         */
        flight::create(['Destination' => 'Tokyo', 'DepartureDates' => '2022-05-20 13:55:44', 'Prices' => '20 000р']);
        flight::create(['Destination' => 'London', 'DepartureDates' => '2022-06-26 05:00:00', 'Prices' => '35 000р']);
        flight::create(['Destination' => 'Paris', 'DepartureDates' => '2022-09-11 07:30:00', 'Prices' => '15 000р']);
        flight::create(['Destination' => 'Canada', 'DepartureDates' => '2022-07-20 01:35:00', 'Prices' => '28 999р']);
        flight::create(['Destination' => 'USA', 'DepartureDates' => '2022-06-05 15:23:00', 'Prices' => '39 999р']);
        flight::create(['Destination' => 'Sydney', 'DepartureDates' => '2023-12-05 09:00:00', 'Prices' => '23 889р']);
        flight::create(['Destination' => 'London', 'DepartureDates' => '2023-08-26 10:00:00', 'Prices' => '20 999р']);
        flight::create(['Destination' => 'London', 'DepartureDates' => '2022-06-01 18:00:00', 'Prices' => '25 999р']);
        flight::create(['Destination' => 'Riga', 'DepartureDates' => '2023-07-01 22:00:00', 'Prices' => '12 999р']);

        return response()->json(true);

    }

    public function show()
    {
        $flights = DB::table('flights')->get();
        return view('search', ['flights' => $flights]);
    }
        //return view('flights');
       // $flights = DB::table('flights')->select('Destination')->get();
        // $flights = (flight::pluck('Destination'));
         //return ($flights);
       // return response()->json($flights);


}
