<?php namespace Timo\Portfolio\Models;

use Model;

/**
 * Education Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Education extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;

    protected $propagatable = ['title', 'institution', 'description'];

    /**
     * @var string table name
     */
    public $table = 'timo_portfolio_education';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
