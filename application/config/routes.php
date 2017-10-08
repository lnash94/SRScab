<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';

$route['users/register']='users/register';
$route['users/login']='users/login';

$route['(:any)']='pages/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
