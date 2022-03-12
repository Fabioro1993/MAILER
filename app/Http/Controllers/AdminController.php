<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterUser;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Admin;
use App\Models\Email;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $admin    = Auth::user();
        $per_page = $request->input('per_page', 10);
        $users    = User::paginate($per_page);
        return view('admin.dashboard', compact('admin', 'users'));
    }

    public function register_user()
    {
        $countries = Country::with('state')->get();
        $min_date = Carbon::now()->subYear(18)->format('Y-m-d');
        return view('admin.register', compact('countries', 'min_date'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $per_page = $request->input('per_page', 10);
        $users    = User::paginate($per_page);
        return view('admin.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RegisterUser  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterUser $request)
    {
        try {
            DB::beginTransaction();

            User::create([
                'name'              => $request->name,
                'email'             => $request->email,
                'password'          => bcrypt($request->password),
                'phone'             => $request->phone,
                'id_card'           => $request->id_card,
                'birthday'          => $request->birthday,
                'postal_code'       => $request->postal_code,
                'municipalities_id' => $request->municipalities_id,
                'email_verified_at' => Carbon::now(),
            ]);

            DB::commit();
            return Redirect::to('admin/dashboard');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $countries = Country::with('state')->get();
        $min_date  = Carbon::now()->subYear(18)->format('Y-m-d');
        return view('admin.edit', compact('countries', 'min_date', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        try {
            DB::beginTransaction();

            $user                    = User::find($user->id);
            $user->name              = $request->name;
            $user->phone             = $request->phone;
            $user->birthday          = $request->birthday;
            $user->postal_code       = $request->postal_code;
            $user->municipalities_id = $request->municipalities_id;

            if ($request->password) {
                $user->password = bcrypt($request->password);
            }
            $user->save();

            DB::commit();
            return Redirect::to('admin/dashboard');
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try {
            DB::beginTransaction();

            $user = User::find($request->id);
            $user->delete();
            DB::commit();
            return 1;
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    public function email(Request $request)
    {
        $per_page = $request->input('per_page', 10);
        $emails   = Email::all();
        return view('admin.email', compact('emails'));
    }
}
