<?php namespace TiMo\Portfolio;

use Backend;
use System\Classes\PluginBase;
use System\Classes\SettingsManager;
use Timo\Portfolio\Components\Educations;
use Timo\Portfolio\Components\Experiences;
use Timo\Portfolio\Components\MainInfo;
use Timo\Portfolio\Components\Projects;
use Timo\Portfolio\Components\Skills;
use Timo\Portfolio\Components\Technologies;
use Timo\Portfolio\Models\Settings;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Portfolio',
            'description' => 'No description provided yet...',
            'author' => 'Timur Moiseenko',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            Technologies::class => 'technologies',
            Educations::class => 'educations',
            Experiences::class => 'experiences',
            Skills::class => 'skills',
            Projects::class => 'projects',
            MainInfo::class => 'mainInfo',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return [
            'timo.portfolio.access' => [
                'tab' => trans('timo.portfolio::lang.name'),
                'label' => 'Some permission'
            ],
        ];
    }

    public function registerContentFields()
    {

    }

    /**
     * @return array[]
     */
    public function registerSettings(): array
    {
        return [
            'settings' => [
                'label' => trans('timo.portfolio::lang.settings.name'),
                'description' => trans('timo.portfolio::lang.settings.description'),
                'icon' => 'icon-code',
                'class' => Settings::class,
                'order' => 900,
                'category' => SettingsManager::CATEGORY_MYSETTINGS,
                'permissions' => ['timo.portfolio.*'],
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return [
            'portfolio' => [
                'label' => trans('timo.portfolio::lang.name'),
                'url' => Backend::url('timo/portfolio/education'),
                'icon' => 'icon-file-o',
                'permissions' => ['timo.portfolio.*'],
                'order' => 500,
                'sideMenu' => [
                    'education' => [
                        'label' => trans('timo.portfolio::lang.education.name'),
                        'url' => Backend::url('timo/portfolio/education'),
                        'icon' => 'icon-graduation-cap',
                        'permissions' => ['timo.portfolio.*'],
                        'order' => 100,
                    ],
                    'experience' => [
                        'label' => trans('timo.portfolio::lang.experience.name'),
                        'url' => Backend::url('timo/portfolio/experience'),
                        'icon' => 'icon-industry',
                        'permissions' => ['timo.portfolio.*'],
                        'order' => 200,
                    ],
                    'project' => [
                        'label' => trans('timo.portfolio::lang.project.name'),
                        'url' => Backend::url('timo/portfolio/project'),
                        'icon' => 'icon-files-o',
                        'permissions' => ['timo.portfolio.*'],
                        'order' => 300,
                    ],
                    'skill' => [
                        'label' => trans('timo.portfolio::lang.skill.name'),
                        'url' => Backend::url('timo/portfolio/skill'),
                        'icon' => 'icon-cogs',
                        'permissions' => ['timo.portfolio.*'],
                        'order' => 400,
                    ],
                    'technology' => [
                        'label' => trans('timo.portfolio::lang.technology.name'),
                        'url' => Backend::url('timo/portfolio/technology'),
                        'icon' => 'icon-wrench',
                        'permissions' => ['timo.portfolio.*'],
                        'order' => 500,
                    ],
                    'settings' => [
                        'label' => trans('timo.portfolio::lang.settings.name'),
                        'url' => Backend::url('system/settings/update/timo/portfolio/settings'),
                        'icon' => 'icon-user-circle-o',
                        'permissions' => ['timo.portfolio.*'],
                        'order' => 600,
                    ],
                ],
            ],
        ];
    }
}
