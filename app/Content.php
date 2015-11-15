<?php

namespace App;

use Vinelab\NeoEloquent\Eloquent\Model;


class Content extends Model
{
    protected $label = 'Content';

    protected $fillable = array(
        'title',
        'published_at',
        'content',
    );
}