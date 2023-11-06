<?php namespace Timo\Portfolio\Models;

use Model;

/**
 * Skill Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Skill extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;

    protected $propagatable = ['title'];

    /**
     * @var string table name
     */
    public $table = 'timo_portfolio_skills';

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
