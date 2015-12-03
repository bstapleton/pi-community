<?php

namespace App;

use Vinelab\NeoEloquent\Eloquent\Model;


class Content extends Model
{
    protected $label = 'Content';

    protected $fillable = array(

    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'CREATED_BY');
    }
    // TODO: all content is 'created by' someone, but how do I also have a 'edited by' relationship against the same model?
}