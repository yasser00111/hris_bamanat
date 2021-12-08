<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'Init_Bamanat';
//Admin
$route['master/area/index'] = 'master/area_init';
$route['master/area/(:any)']  = 'master/area_init/get/$1';
$route['master/jabatan/index'] = 'master/jabatan_init';
$route['master/jabatan/(:any)']  = 'master/jabatan_init/get/$1';
$route['master/lisensi/index'] = 'master/licensi_init';
$route['master/lisensi/(:any)']  = 'master/licensi_init/get/$1';
$route['master/roster-kerja/index'] = 'master/roster_init';
$route['master/roster-kerja/(:any)']  = 'master/roster_init/get/$1';
$route['master/kategori-dokumen/index'] = 'master/dokumen_init';
$route['master/kategori-dokumen/(:any)']  = 'master/dokumen_init/get/$1';
$route['master/suku/index']   = 'master/suku_init';
$route['master/suku/(:any)']  = 'master/suku_init/get/$1';
$route['master/agama/index']   = 'master/agama_init';
$route['master/agama/(:any)']  = 'master/agama_init/get/$1';
$route['master/bank/index']   = 'master/bank_init';
$route['master/bank/(:any)']  = 'master/bank_init/get/$1';
$route['master/karyawan/(:any)']  = 'master/karyawan_init/get/$1';
// $route['master/edit/(:any)']  = 'master/karyawan_init/get/$1';
//end admin
$route['data/apd/index']   = 'data/apd_init';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
