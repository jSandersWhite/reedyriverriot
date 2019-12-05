<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\MembershipType;

class JoinController extends Controller
{
    /**
     * Render Join page with MembershipTypes
     * 
     * @return string
     */
    public function __invoke()
    {
        $membershipTypes = MembershipType::all();
        return view('join.join', ['membershipTypes' => $membershipTypes]);
    }
}