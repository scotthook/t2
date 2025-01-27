<?php namespace AndrewPe\Crm\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Campaigns extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('AndrewPe.Crm', 'main-menu-item');
    }
}
