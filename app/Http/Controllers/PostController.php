<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Post()
    {
        $id = array ( 
            'name' => 'Bill Christian S.Panopio',
            'course' => 'BSIT',
            'block' => "3A"
        );
        return view('post')->with('id', $id);
    }

    
}
