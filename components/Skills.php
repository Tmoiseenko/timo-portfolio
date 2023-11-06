<?php namespace Timo\Portfolio\Components;

use Cms\Classes\ComponentBase;

/**
 * Skills Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Skills extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Skills Component',
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
}
