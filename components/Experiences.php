<?php namespace Timo\Portfolio\Components;

use Cms\Classes\ComponentBase;
use Timo\Portfolio\Models\Experience;

/**
 * Experiences Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Experiences extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Experiences Component',
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
        return Experience::orderByDesc('current')->orderByDesc('date_to')->get();
    }
}
