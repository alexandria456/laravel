<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\flight;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ReysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $flights = flight::paginate(5);


        return view('admin.flights.index', compact('flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
       // $tickets = Ticket::pluck('Price', 'id')->all();
        return view('admin.flights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'Destination' => 'required',
            'Departure' => 'required',
            'TravelTime' => 'required',
            'DepartureDates' => 'required',

        ]);
        flight::create($request->all()); //для всех полей all()
      //  $request->session()->flash('Success', 'Рейс был создан');
        return redirect()->route('Flights.index')->with('Success', 'Рейс был создан');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {

        $flight = flight::find($id);
        return view('admin.flights.edit', compact('flight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Destination' => 'required',
            'Departure' => 'required',
            'TravelTime' => 'required',
            'DepartureDates' => 'required',

        ]);
        $flight = flight::find($id);
        $flight->update($request->all());
        return redirect()->route('Flights.index')->with('Success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $flight = flight::find($id);
        $flight->delete();
        return redirect()->route('Flights.index')->with('Success', 'Рейс удален');

    }
}
