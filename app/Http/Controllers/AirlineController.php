<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Airlines;

class AirlineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $airlines = Airlines::with(['flight'])->orderBy('created_at', 'DESC')->get();
      return response()->json(['data' => $airlines]);
    }

    public function create(Request $request)
    {
        $airline = new Airlines;
        $airline->fill([
            'name_airlines' => $request->input('name_airlines')
        ]);
        if($airline->save()) {
            $res['success'] = true;
            $res['result'] = 'Success add new Flights';

            return response()->json($res);
        }
    }

    public function read(Request $request, $id)
    {
        $airline = Airlines::where('id', $id)->first();
        if ($airline !== null) {
            $res['success'] = true;
            $res['result'] = $airline;

            return response()->json($res);
        } else {
            $res['success'] = False;
            $res['result'] = 'Airline not found';

            return response()->json($res);
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->has('name_airlines')) {
            $airline = Airlines::find($id);
            $airline->name_airlines = $request->input('name_airlines');
            if ($airline->save()) {
                $res['success'] = true;
                $res['result'] = 'Success update '.$request->input('name_airlines');

                return response()->json($res);
            } else {
                $res['success'] = false;
                $res['result'] = 'Please fill code Airline';

                return response()->json($res);
            }
        }
    }

    public function delete(Request $request, $id)
    {
        $airline = Airlines::find($id);
        if ($airline->delete($id)) {
            $res['success'] = true;
            $res['result'] = 'Success delete Airline';

            return response()->json($res);
        }
    }
}
