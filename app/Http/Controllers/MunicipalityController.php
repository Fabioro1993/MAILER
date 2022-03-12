<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipality;

class MunicipalityController extends Controller
{
    public function municipality_list(Request $request)
    {
        $municipalities = Municipality::select("id","name_municipality")->where("state_id",$request->state_id)->get();
        return response()->json($municipalities);
    }
}
