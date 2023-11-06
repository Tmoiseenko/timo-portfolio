<?php namespace Timo\Portfolio\Components;

use Cms\Classes\ComponentBase;
use Timo\Portfolio\Models\Technology;

/**
 * Technologies Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Technologies extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Technologies Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function items()
    {
        return Technology::all();
    }
}
