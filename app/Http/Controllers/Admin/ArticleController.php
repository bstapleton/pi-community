<?php

namespace app\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ArticleController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $articles = array();

        foreach (Article::with('user')->with('template')->get() as $article) {
            array_push($articles, $article);
        }

        //return $articles;
        return view('admin.articles.index', compact('articles'));
    }

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

    public function save()
    {
        return view('admin.articles.save', compact('article'));
    }
}