<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Flights;
use App\Airlines;

class FlightController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $flight = Flights::orderBy('arrivalTime', 'DESC')->get();
        return response()->json(['data' => $flight]);
    }

    public function create(Request $request)
    {
        $flight = new Flights;
        $flight->fill([
            'user_id' => $request->input('user_id'),
            'airline_id' => $request->input('airline_id'),
            'flightNumber' => $request->input('flightNumber'),
            'departurePort' => $request->input('departurePort'),
            'arrivalPort' => $request->input('arrivalPort'),
            'departureTime' => $request->input('departureTime'),
            'arrivalTime' => $request->input('arrivalTime')
        ]);
        if($flight->save()) {
            $res['success'] = true;
            $res['result'] = 'New Flight added';

            return response()->json($res);
        }
    }

    public function search(Request $request) 
    {
        $flight = Flights::orderBy('arrivalTime', 'DESC')->get();
        $filtered = $flight->whereIn('flightNumber', [$request->input('flightNumber')]);
        
        return response()->json(['result' => $filtered]); 
    }
}
