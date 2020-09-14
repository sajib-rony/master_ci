<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['dashboard'] = 'welcome/index';

//form start
$route['general-form'] = 'welcome/general';
$route['advanced-form'] = 'welcome/advanced';
$route['editors-form'] = 'welcome/editors';
$route['validation-form'] = 'welcome/validation';
//form end
//table start
$route['simple-table'] = 'welcome/table_simple';
$route['DataTables-table'] = 'welcome/table_datatable';
$route['jsGrid-table'] = 'welcome/table_jsgrid';
//table end


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
