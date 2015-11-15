<?php

namespace App\Http\Controllers;

use App\Game;
use App\Developer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Request;

class GamesController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $games = Game::latest('created_at')->get();

        return view('games.index', compact('games'));
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);

        return view('games.show', compact('game'));
    }

    public function create()
    {
        $developers = Developer::all(['id', 'title']);
        $developerList = array();

        foreach ($developers as $developer) {
            $developerList[$developer->id] = $developer->title;
        }

        return view('games.create')->with('developerList', $developerList);
    }

    public function store(Request $request)
    {
        $input = $this->request->all();
        $game = Game::create($input);

        //$game = Game::create([])
        $developerID = $request->input('developer');
        $developer = Developer::find($developerID);
        $relation = $game->developer()->save($developer);

        $this->assertInstanceOf('NeoEloquent\Eloquent\Edges\EdgeOut', $relation);
//
//        $saved = $relation->save();

//        $this->assertTrue($saved);
//        $this->assertInstanceOf('Carbon\Carbon', $relation->created_at, 'make sure we set the created_at timestamp');
//        $this->assertInstanceOf('Carbon\Carbon', $relation->updated_at, 'make sure we set the updated_at timestamp');
//        $this->assertArrayHasKey('user', $developer->getRelations(), 'make sure the user has been set as relation in the model');
//        $this->assertArrayHasKey('user', $developer->toArray(), 'make sure it is also returned when dealing with the model');
//        $this->assertEquals($developer->game->toArray(), $game->toArray());

        // Let's retrieve it to make sure that NeoEloquent is not lying about it.
//        $saved = Location::find($developer->id);
//        $this->assertEquals($game->toArray(), $saved->game->toArray());

        //return $dev; exit;

        //return redirect('games');
    }

    public function getDevelopers()
    {
        $developers = Developer::find();

        return $developers;
    }
}
