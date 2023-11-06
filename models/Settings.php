<?php namespace Timo\Portfolio\Models;

use System\Models\SettingModel;

/**
 * Settings Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Settings extends SettingModel
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Multisite;

    protected $propagatable = [];

    public $settingsCode = 'timo_portfolio_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [];

    public function getIconOptions($value, $formData)
    {
        return [
            'icon-facebook-square' => ['Facebook', 'icon-facebook-square'],
            'icon-instagram' => ['Instagram', 'icon-instagram'],
            'icon-github-square' => ['GitHub', 'icon-git'],
            'icon-gitlab' => ['Gitlab', 'icon-gitlab'],
            'icon-vk' => ['VK', 'icon-vk'],
            'icon-linkedin-square' => ['LinkedIn', 'icon-linkedin-square'],
            'icon-telegram' => ['Telegram', 'icon-telegram'],
            'icon-stack-overflow' => ['Stack Overflow', 'icon-stack-overflow'],
            'icon-behance-square' => ['Behance', 'icon-behance-square'],
        ];
    }
}
