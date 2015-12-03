<?php

namespace App;

use App\Content;
use App\User;
use APP\Template;
use Vinelab\NeoEloquent\Eloquent\Model;


class Article extends Content
{
    protected $label = 'Article';

    protected $fillable = array(
        'name',
        'published_at',
        'content',
        'introduction',
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function template()
    {
        return $this->hasOne('App\Template', 'USES');
    }

    /**
     * @return \Vinelab\NeoEloquent\Eloquent\Relations\HasMany
     */
    public function image()
    {
        return $this->hasMany('App\Image', 'INCLUDES');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function gallery()
    {
        return $this->hasOne('App\Gallery', 'INCLUDES');
    }
}