<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mobil;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('layout.home')->with([
            'mobil' => Mobil::all()
        ]);
    }

    public function profile(User $user, $id)
    {
        $data = User::find($id);
        return view('auth.profile')->with([
        'id' => $data,
        'name' => $data->name,
        'email' => $data->email,
        'alamat' => $data->alamat,
        'nohp' => $data->nohp,
        'nosim' => $data->nosim
        ]);

    }
}
