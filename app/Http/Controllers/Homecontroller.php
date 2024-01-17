<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    { 
       
        return view('test');
    }    

    public function signInPage()
{
    $name = 'sign_in';
    $binding = [
        'title' => ShareData::TITLE,
        'name' => $name,
    ];
    return view('user.sign-in', $binding);
} 
      
}
?>