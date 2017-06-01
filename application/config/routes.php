<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'welcome/login';
$route['logout'] = 'welcome/logout';
$route['deleteorder/(:any)'] = 'welcome/deleteorder/$1';
$route['deletepembayaran/(:any)'] = 'welcome/deletepembayaran/$1';
$route['gallery/(:any)'] = 'welcome/gallery/$1';
$route['cart/(:any)'] = 'welcome/cart/$1';
$route['deletecart/(:any)'] = 'welcome/deletecart/$1';
$route['admin/read'] = 'welcome/read';
$route['admin/create'] = 'welcome/create';
$route['admin/confirmr'] = 'welcome/confirmr';
$route['admin/confirmc'] = 'welcome/confirmc';
$route['admin/orderr'] = 'welcome/orderr';
$route['admin/orderc'] = 'welcome/orderc';
$route['admin/complainr'] = 'welcome/complainr';
$route['admin/complainc'] = 'welcome/complainc';
$route['admin/history'] = 'welcome/history';
$route['admin/login'] = 'welcome/login';
$route['admin/updateStock/(:any)'] = 'welcome/updateStock/$1';
$route['default_controller'] = 'welcome';
$route['addtocart/(:any)'] = 'welcome/addtocart/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
