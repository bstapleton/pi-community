<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndieWeekendController extends Controller
{
    public function index()
    {
        return view('content.pages.indieweekend3');
    }
}
