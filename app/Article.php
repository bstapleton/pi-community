<?php

namespace App;

use App\Content;
use App\User;
use APP\Template;
use Vinelab\NeoEloquent\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Relations;


class Article extends Content
{
    protected $label = 'Article';

    protected $fillable = array(
        'introduction',
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'CREATED_BY');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function template()
    {
        return $this->hasOne('App\Template', 'USES');
    }
}