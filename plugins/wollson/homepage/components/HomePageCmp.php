<?php namespace Wollson\HomePage\Components;

use BackendAuth;
use Db;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Wollson\HomePage\Models\HomePage;

class HomePageCmp extends ComponentBase
{
    public $homepage;

    public function componentDetails()
    {
        return [
            'name'        => 'Home',
        ];
    }

    public function onRun()
    {  
        $this->page['home'] = HomePage::first();
    }

}
