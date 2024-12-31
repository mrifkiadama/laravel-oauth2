<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public static function middleware(): array
    {
        return [
            'auth',
        ];
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

    public function welcome()
    {
        return view('welcome');
    }
}
