<?php namespace Timo\Portfolio\Models;

use Model;
use RainLab\User\Models\User;

/**
 * Project Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;

    /**
     * @var string table name
     */
    public $table = 'timo_portfolio_projects';

    protected $propagatable = ['title', 'link_title', 'description'];

    /**
     * @var array rules for validation
     */
    public $rules = [];

    /**
     * @var array
     */
    public $belongsToMany = [
        'technologies' => [
            Technology::class,
            'table' => 'timo_portfolio_technology_project'
        ],
    ];
}
