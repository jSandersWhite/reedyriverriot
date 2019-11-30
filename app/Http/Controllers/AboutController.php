<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class AboutController extends Controller
{
    /**
     * Render About Us page with users 
     */
    public function __invoke()
    {
        $users = User::all();
        return view('about.about', ['users' => $users]);
    }
}