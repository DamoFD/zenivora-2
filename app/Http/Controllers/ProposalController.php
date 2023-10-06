<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    public function show()
    {
        return view('proposals/show');
    }
}
