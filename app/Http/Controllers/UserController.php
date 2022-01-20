<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function solutionCandidateIndex()
    {
        return view('solution-candidate');
    }

    public function solutionCustomerIndex()
    {
        return view('solution-customer');
    }

    public function solutionTeamsIndex()
    {
        return view('solution-teams');
    }
}
