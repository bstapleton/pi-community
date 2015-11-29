<?php

namespace App;

use App\Content;
use App\User;
use APP\Template;
use Vinelab\NeoEloquent\Eloquent\Model;
use Vinelab\NeoEloquent\Eloquent\Relations;


/**
 * Class Country
 *
 * @package App
 */
class Country extends Model
{
    protected $label = 'Country';

    protected $fillable = array(
        'name',
        'citizenship',
        'flag',
        'full_name'
    );

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'HAS_NATIONALITY');
    }
}