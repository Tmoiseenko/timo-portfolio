<?php namespace Timo\Portfolio\Models;

use Model;

/**
 * Technology Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Technology extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $propagatable = ['title'];

    /**
     * @var string table name
     */
    public $table = 'timo_portfolio_technologies';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
