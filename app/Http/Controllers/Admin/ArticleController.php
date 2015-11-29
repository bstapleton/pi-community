<?php

namespace app\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ArticleController
 * @package app\Http\Controllers\Admin
 */
class ArticleController extends Controller
{
    protected $request;

    /**
     * ArticleController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        // Restrict access to authenticated users
        $this->middleware('auth');

        $this->request = $request;
    }

    /**
     * Returns a view of all articles in the system
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $articles = array();

        foreach (Article::with('user')->with('template')->get() as $article) {
            array_push($articles, $article);
        }

        //return $articles;
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Returns a view for creating a new article
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.articles.create', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Stores the new article in the graph
     *
     * @return \Illuminate\View\View
     */
    public function store()
    {
        return view('admin.articles.store', compact('article'));
    }
}