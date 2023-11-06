<?php namespace Timo\Portfolio\Components;

use Cms\Classes\ComponentBase;
use Timo\Portfolio\Models\Settings;

/**
 * MainInfo Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class MainInfo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'MainInfo Component',
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

    public function onRun()
    {
        $this->page['settings'] = [
            'birthday' => Settings::get('birthday'),
            'country' => Settings::get('country'),
            'city' => Settings::get('city'),
            'email' => Settings::get('email'),
            'phone' => Settings::get('phone'),
            'resume_file' => Settings::get('resume_file'),
            'avatar' => Settings::get('avatar'),
            'about' => Settings::get('about'),
            'socials' => Settings::get('socials'),
        ];
    }

    public function birthday()
    {
        echo Settings::get('birthday');
    }

    public function country()
    {
        return Settings::get('country');
    }

    public function city()
    {
        return Settings::get('city');
    }

    public function email()
    {
        return Settings::get('email');
    }

    public function phone()
    {
        return Settings::get('phone');
    }

    public function resume_file()
    {
        return Settings::get('resume_file');
    }

    public function avatar()
    {
        return Settings::get('avatar');
    }

    public function about()
    {
        return Settings::get('about');
    }

    public function socials()
    {
        return Settings::get('socials');
    }
}
