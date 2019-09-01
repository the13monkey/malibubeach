<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return view( 'home' );
    }

    public function pending()
    {
        return view( 'pending' );
    }

    public function lot()
    {
        return view( 'lot' );
    }

    public function house()
    {
        return view( 'house' );
    }
}
