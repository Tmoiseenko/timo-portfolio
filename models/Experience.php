<?php namespace Timo\Portfolio\Models;

use Model;

/**
 * Experience Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Experience extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;

    protected $propagatable = ['position', 'employer', 'description'];

    /**
     * @var string table name
     */
    public $table = 'timo_portfolio_experiences';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
