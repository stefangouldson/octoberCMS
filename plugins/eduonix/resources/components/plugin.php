<?php namespace Eduonix\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'=>'Eduonix',
            'description'=>'Provide company resource',
            'author'=>'Roman',
            'icon'=>'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            'Eduonix\Resource\Components\Links'=>'resourceLinks'
        ];
    }
}
