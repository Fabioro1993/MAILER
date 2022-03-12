<?php

namespace App\Http\Controllers;

use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{
    public function index()
    {
        $activities = Activity::all();

        return view('admin.log', compact('activities'));
    }
}
