<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\User;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check()){
            if (Auth::user()->name == 'Admin'){
                $appointments = Appointment::all();
                $clients = Client::all();

                return view('appointments.index', compact('appointments', 'clients'));
   
            } else {
                $appointments = Appointment::where('user_id', Auth::user()->id)->get();
                $clients = Client::all();

                return view('appointments.index', compact('appointments', 'clients'));
   
            }
        } else {
            return view('appointments.index');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Appointment $appointment)
    {
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
        $clients = Client::all();
        $scheduledClient = Client::findOrFail($appointment->client_id);

        return view('appointments.edit', compact('appointment', 'users', 'clients', 'scheduledClient'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Appointment $appointment)
    {

        $appointment->update($this->validatedData());

        return redirect('/appointments/'. $appointment->id);
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
            'date' => 'required|date',
            'user_id' => 'required'
        ]);
    }
}
