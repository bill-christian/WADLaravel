<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
     $user = array( 
            'nickname' => 'bxtian',
            'email' => 'bxtian@gmail.com',
            'studentid' => "201910979"
        );
        return view('home')->with('user', $user);
    }

    
}
