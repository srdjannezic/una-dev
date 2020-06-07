<?php namespace Wollson\Homepage\Models;

use Model;

/**
 * Model
 */
class HomePage extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'wollson_homepage_';

    public $jsonable = array('images','sections');

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
