<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('profile');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $collection = Donate::simplePaginate(15);
        return view('profile', compact('collection'));
    }

    public function donate(Request $request)
    {
        $name = $request->params;
        Donate::create(['name' => $name['name'], 'email' => $name['email'], 'amount' => $name['amount']]);
    }
}
