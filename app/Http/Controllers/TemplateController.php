<?php

namespace App\Http\Controllers;

use App\Content;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class TemplateController extends Controller
{
    public function index()
    {

    }

    public function getTemplates()
    {
        $templates = Template::find();

        return $templates->toArray();
    }
}
