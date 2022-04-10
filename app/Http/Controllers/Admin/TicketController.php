<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\flight;
use App\Models\Passenger;
use App\Models\Ticket;
use Illuminate\Contracts\Foundation\Application as ApplicationAlias;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use phpDocumentor\Reflection\Types\Integer;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return ApplicationAlias|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function index()
    {
        $tickets= Ticket::paginate(5);

        return view('admin.tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return ApplicationAlias|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $flights = flight::pluck('Destination', 'id')->all();

        $passengers = Passenger::pluck('Name', 'id')->all();
       return view('admin.tickets.create', compact('flights', 'passengers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'Seat' => 'required',
            'Price' => 'required',
            'id_Flight' => 'integer',
        ]);
        $data = $request->all();
        $ticket = Ticket::create($data);
        $ticket->passengers()->sync($request->passengers);
       // dd($request->all());
        return redirect()->route('Tickets.index')->with('Success', 'Билет был оформлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return ApplicationAlias|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function edit($id)
    {

        return view('admin.tickets.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Seat' => 'required',
            'Price' => 'required',

        ]);

        return redirect()->route('Tickets.index')->with('Success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): \Illuminate\Http\RedirectResponse
    {

        return redirect()->route('Tickets.index')->with('Success', 'Билет удален');

    }
}
