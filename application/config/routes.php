<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users/login']='users/login';
$route['users/adminlogin']='users/adminlogin';
$route['Gcarview']='Gcarview';
$route['Lcarview']='Lcarview';
$route['Vbusview']='Vbusview';
$route['Ccarview']='Ccarview';
$route['Selfdrive']='Selfdrive';
$route['Withdriver']='Withdriver';
$route['Airport']='Airport';
$route['Wedding']='Wedding';


//$route['(:any)/(:any)']='pages/view/$2';
$route['(:any)']='pages/view/$1';

$route['default_controller'] = 'pages/view';
$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;
