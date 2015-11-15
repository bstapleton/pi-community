<?php

namespace App\Http\Controllers;

use App\Article;
use App\Template;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\ContentController;

class ArticleController extends ContentController
{
    public function template()
    {
        return $this->hasOne('App\Template');
    }

    public function index()
    {
        return view('content.pages.home');
    }

    public function create()
    {
        return view('content.create');
    }
}
