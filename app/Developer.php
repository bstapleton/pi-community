<?php

namespace App;

use Vinelab\NeoEloquent\Eloquent\Model;

class Developer extends Model
{
    protected $label = 'Developer';

    protected $fillable = [
        'title',
        'founded',
        'introduction'
    ];

    public function games()
    {
        return $this->hasMany('App\Game', 'Developed_By');
    }
}