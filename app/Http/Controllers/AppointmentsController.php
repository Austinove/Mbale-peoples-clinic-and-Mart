<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Events\NewAppointment;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user())
            return view('pages.appointments');
        else
            return Redirect()->route('home');
    }

    public function store(Request $request)
    {
        try {
            $appointment = new Appointment([
                'name' => $request['appointment-name'],
                'number' => $request['appointment-number'],
                'appt_date' => $request['appointment-date'],
                'message' => $request['appointment-sms'],
                'view' => 0
            ]);
            $appointment->save();
            $newappt = Appointment::where(
                array(
                    'name' => $request['appointment-name'],
                    'number' => $request['appointment-number'],
                    'appt_date' => $request['appointment-date'],
                    'message' => $request['appointment-sms'],
                    'view' => 0
                )
            )->first();
            event(new NewAppointment($newappt));
            return response()->json([
                'msg' => 'Appointment Sent'
            ]);
        } catch (QueryException $e) {
            throw $e->getMessage();
        }
        
    }

    public function fetchAppointments(){
        return response()->json(Appointment::orderBy("created_at", "desc")->get());
    }
}
