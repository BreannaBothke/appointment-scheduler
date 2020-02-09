<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        $clients = Client::all();

        return view('appointments.index', compact('appointments', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appointment = new Appointment();
        $users = User::all();
        $clients = Client::all();
        
        return view('appointments.create', compact('appointment', 'users', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = Appointment::create($this->validatedData());

        return redirect('/appointments/' . $appointment->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        $client = Client::findOrFail($appointment->client_id);
        $user = User::findOrFail($appointment->user_id);

        // $data = [
        //     'client_name' => '{{$client->name}}',

        // ]

        return view('appointments.show', compact('appointment', 'client', 'user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    
    {
        $users = User::all();

        return view('appointments.edit', compact('appointment', 'users'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {

        $appointment->date = $request->date;
        $appointment->client_id = $request->client_id;
        $appointment->user_id = $request->user_id;



        $appointment->save();

        return redirect('/appointments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect('/appointments');
    }

    protected function validatedData()
    {
        return request()->validate([
            'client_id' => 'required',
            'date' => 'required|date'
        ]);
    }

    protected function validatedAppointmentData()
{
    $rules = array(
      'client_id' => 'required',
      'date'  => 'required',
      'user_id'      => 'required',
);
    $this->validate( $request , $rules);
}   

}
