<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = 'halaman404';
$route['translate_uri_dashes'] = FALSE;

//home
$route['tujuan'] = 'home/tujuan';
$route['tentang'] = 'home/tentang';
$route['donasi'] = 'home/donasi';
$route['kontak'] = 'home/kontak';


//account
$route['masuk'] = 'account/masuk';
$route['daftar'] = 'account/daftar';
$route['logout'] = 'account/logout';

//browse
$route['browse/(:any)'] = 'browse/video/$1';
$route['profil'] = 'browse/profil';
$route['pages'] = 'browse/pages';
