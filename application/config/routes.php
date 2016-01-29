<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = 'halaman404';
$route['translate_uri_dashes'] = FALSE;

//home
$route['tujuan'] = 'Home/tujuan';
$route['tentang'] = 'Home/tentang';
$route['donasi'] = 'Home/donasi';
$route['kontak'] = 'Home/kontak';


//account
$route['login'] = 'Account/login';
$route['register'] = 'Account/register';
$route['logout'] = 'Account/logout';

//browse
$route['browse/(:any)'] = 'Browse/video/$1';
$route['profil/(:any)'] = 'Browse/profil';
$route['pages/(:any)'] = 'Browse/pages';
