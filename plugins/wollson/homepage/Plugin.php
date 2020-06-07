<?php namespace Wollson\Homepage;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
            'Wollson\Homepage\Components\HomePageCmp'       => 'HomePage'
        ];
    }
}
