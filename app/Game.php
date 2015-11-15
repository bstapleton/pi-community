<?php

namespace App;

use Vinelab\NeoEloquent\Eloquent\Model;

class Game extends Model
{
    protected $label = 'Game';

    protected $fillable = [
        'title',
        'release_date',
        'introduction',
        'body'
    ];

    public function developer()
    {
        return $this->belongsTo('App\Developer', 'id');
    }
}