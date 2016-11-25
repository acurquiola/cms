<?php namespace TopSportsTv\Subscriptions\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Pagos extends Controller
{
    public $implement = ['Backend\Behaviors\ListController','TopSportsTv\Subscriptions\Behaviors\FormController','Backend\Behaviors\ReorderController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('TopSportsTv.Subscriptions', 'gestionPagos');
    }


}