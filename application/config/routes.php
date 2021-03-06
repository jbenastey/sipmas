<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/


//surat
$route['surat'] = 'SuratController/index';
$route['surat/create'] = 'SuratController/create';
$route['surat/read/(:any)'] = 'SuratController/read/$1';
$route['surat/update/(:any)'] = 'SuratController/update/$1';
$route['surat/delete/(:any)'] = 'SuratController/delete/$1';
$route['surat/disposition/(:any)'] = 'SuratController/disposition/$1';
$route['surat/reject/(:any)'] = 'SuratController/reject/$1';

//spt
$route['spt'] = 'SptController/index';
$route['spt/create/(:any)'] = 'SptController/create/$1';
$route['spt/read/(:any)'] = 'SptController/read/$1';
$route['spt/update/(:any)'] = 'SptController/update/$1';
$route['spt/delete/(:any)'] = 'SptController/delete/$1';
$route['spt/disposition/(:any)'] = 'SptController/disposition/$1';
$route['spt/reject/(:any)'] = 'SptController/reject/$1';
$route['spt/ajaxNama/(:any)'] = 'SptController/ajaxNama/$1';
//notifikasi
$route['spt/notification/(:any)'] = 'SptController/notification/$1';
//cetak
$route['spt/cetak/(:any)'] = 'SptController/cetak/$1';


//laporan
$route['laporan'] = 'LaporanController/index';
$route['laporan/create'] = 'LaporanController/create';
$route['laporan/download/(:any)'] = 'LaporanController/download/$1';

//profil
$route['profil'] = 'ProfilController/index';
$route['profil/update'] = 'ProfilController/update';
$route['profil/foto'] = 'ProfilController/foto';
$route['profil/password'] = 'ProfilController/password';

//auth
$route['login'] = 'AuthController/login';
$route['logout'] = 'AuthController/logout';
$route['register'] = 'AuthController/register';


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


