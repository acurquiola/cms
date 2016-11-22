<?php namespace TopSportsTv\Subscriptions;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'TopSportsTv\Subscriptions\Components\PagosForm' => 'PagosForm'
        ];
    }

    public function registerSettings()
    {
    }
}
