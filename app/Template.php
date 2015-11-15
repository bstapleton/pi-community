<?php

namespace App;

use Vinelab\NeoEloquent\Eloquent\Model;


class Template extends Model
{
    protected $label = 'Template';

    protected $fillable = array(
        'title',
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany('App\Article', 'USED_BY');
    }
}