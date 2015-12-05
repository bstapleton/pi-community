<?php

namespace App;

use Vinelab\NeoEloquent\Eloquent\Model;


class Content extends Model
{
    protected $label = 'Content';

    protected $fillable = array(

    );

    /**
     * @param string $type relationship edge we want to reference
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user($type = 'creator')
    {
        if ('creator' == $type) {
            return $this->hasOne('App\User', 'CREATED_BY');
        }
        elseif ('editor' == $type) {
            return $this->hasOne('App\User', 'EDITED_BY');
        }
    }
}