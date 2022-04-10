<?php

namespace App\Http\Controllers;

use App\Models\flight;
use Illuminate\Http\Request;

class SearchController extends Controller
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
            ->paginate(2);

        return view('home', compact('flights'))->with('i', (request()->input('page', 1)-1)*5);

    }
}
