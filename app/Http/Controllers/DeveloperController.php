<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class DeveloperController extends Controller
{
    public function index()
    {
        $developers = Developer::latest('created_at')->get();

        return view('developer.index', compact('developers'));
    }

    public function show($id)
    {
        $game = Developer::findOrFail($id);

        return view('developer.show', compact('developer'));
    }

    public function create()
    {
        return view('developer.create');
    }

    public function store()
    {
        $input = Request::all();

        Developer::create($input);

        return redirect('developer');
    }

    public function getDevelopers()
    {
        $developers = Developer::find();

        return $developers->toArray();
    }
}
