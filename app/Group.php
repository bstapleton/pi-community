<?php

namespace App;

use App\Content;
use App\User;
use APP\Template;
use Vinelab\NeoEloquent\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Relations;


/**
 * Class Group
 *
 * User group class
 *
 * @package App
 */
class Group extends Content
{
    protected $label = 'Group';

    protected $fillable = array(
        'name',
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'MEMBER_OF');
    }
}