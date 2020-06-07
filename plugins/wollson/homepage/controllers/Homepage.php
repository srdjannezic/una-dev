<?php namespace Wollson\Homepage\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Homepage extends Controller
{
    public $implement = [        'Backend\Behaviors\FormController'    ];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Wollson.Homepage', 'main-menu-item');
    }
}
