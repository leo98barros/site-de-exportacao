<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return
     */
    public function index()
    {
        return view('app.home');
    }

    /**
     * @return
     */
    public function produto()
    {
        return view('app.produtos');
    }

    /**
     * @return
     */
    public function sobre()
    {
        return view('app.sobre');
    }

    /**
     * @return
     */
    public function contato()
    {
        return view('app.contato');
    }
}
