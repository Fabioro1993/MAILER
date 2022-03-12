<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateEmailRequest;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StoreEmailRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Email;
use Carbon\Carbon;

class EmailController extends Controller
{
    public function dashboard(Request $request)
    {
        $per_page = $request->input('per_page', 10);
        $emails   = Email::where('user_id', Auth::id())->get();
        return view('users.dashboard', compact('emails'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::with('state')->get();
        $min_date = Carbon::now()->subYear(18)->format('Y-m-d');
        return view('users.create_email', compact('countries', 'min_date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmailRequest $request)
    {
        try {
            DB::beginTransaction();

            Email::create([
                'subject'   => $request->subject,
                'addressee' => $request->addressee,
                'message'   => $request->message,
                'status'    => 0,
                'user_id'   => Auth::id()
            ]);

            DB::commit();
            return Redirect::to('dashboard');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function show(Email $email)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmailRequest  $request
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmailRequest $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Email  $email
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
        //
    }
}
