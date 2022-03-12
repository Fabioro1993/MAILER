<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function state_list(Request $request)
    {
        $states = State::select('name_state', 'id')->where("country_id", $request->country_id)->get();
        return response()->json($states);
    }
}
