<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
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

    public function homepage()
    {
        return view('homepage');
    }

    public function shop()
    {
        $params = app( '\Aimeos\Shop\Base\Page' )->getSections( 'shop' );

        //return view('shop', $params);
        return $params;
    }
}
