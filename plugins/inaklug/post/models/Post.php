<?php namespace Inaklug\Post\Models;

use Model;

/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'inaklug_post_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
