<?php

namespace App\Http\Controllers\Admin;

use App\Article;
//use Request;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
//use App\Http\Controllers\Auth;

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
        $article = Article::find($id);

        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Stores the new article in the graph
     *
     * @return \Illuminate\View\View
     */
    public function store()
    {
        $input = $this->request->all();
        $article = Article::create($input);

        $author = User::find(\Auth::user()->id);
        $article->user()->save($author);

        return redirect()
            ->action('Admin\ArticleController@index')
            ->with('status', 'Article has been saved.');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        $article = Article::find($id);

        // TODO: here we are setting the article editor to the current user - we need to do some stuff to establish if they have the access to be an official content editor before this is allowed
        $editor = User::find(\Auth::user()->id);
        $article->user('editor')->save($editor);

        return redirect()
            ->action('Admin\ArticleController@index')
            ->with('status', 'Article has been updated.');
    }
}