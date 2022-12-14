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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['dashboard'] = 'DashboardController';

$route['login'] = 'AuthController';
$route['logout'] = 'AuthController/logout';

$route['show-pegawai'] = 'DataPegawaiController/showPegawai';
$route['data-pegawai'] = 'DataPegawaiController/dataPegawai';
$route['tambah-pegawai'] = 'DataPegawaiController/tambahPegawai';
$route['ubah-pegawai'] = 'DataPegawaiController/ubahPegawai';
$route['export-pegawai'] = 'DataPegawaiController/exportPegawai';
$route['del-pegawai'] = 'DataPegawaiController/hapus';

$route['data-pelatihan'] = 'DataPelatihanController/dataPelatihan';
$route['tambah-pelatihan'] = 'DataPelatihanController/tambahPelatihan';
$route['ubah-pelatihan'] = 'DataPelatihanController/ubahPelatihan';
$route['export-pelatihan'] = 'DataPelatihanController/exportPelatihan';


$route['data-unit'] = 'DataUnitController/dataUnit';
$route['tambah-unit'] = 'DataUnitController/tambahUnit';
$route['ubah-unit'] = 'DataUnitController/ubahUnit';
$route['del-unit'] = 'DataUnitController/hapus';

$route['data-pangkat'] = 'DataPangkatController/dataPangkat';
$route['tambah-pangkat'] = 'DataPangkatController/tambahPangkat';
$route['ubah-pangkat'] = 'DataPangkatController/ubahPangkat';
$route['del-pangkat'] = 'DataPangkatController/hapus';

$route['data-jabatan'] = 'DataJabatanController/dataJabatan';
$route['tambah-jabatan'] = 'DataJabatanController/tambahJabatan';
$route['ubah-jabatan'] = 'DataJabatanController/ubahJabatan';
$route['del-jabatan'] = 'DatajabatanController/hapus';

$route['data-pendidikan'] = 'DataPendidikanController/dataPendidikan';
$route['tambah-pendidikan'] = 'DataPendidikanController/tambahPendidikan';
$route['ubah-pendidikan'] = 'DataPendidikanController/ubahPendidikan';
$route['del-pendidikan'] = 'DataPendidikanController/hapus';

$route['data-eselon'] = 'DataEselonController/dataEselon';
$route['tambah-eselon'] = 'DataEselonController/tambahEselon';
$route['ubah-eselon'] = 'DataEselonController/ubahEselon';
$route['del-eselon'] = 'DataEselonController/hapus';

$route['data-tipe'] = 'DataTipeController/dataTipe';
$route['tambah-tipe'] = 'DataTipeController/tambahTipe';
$route['ubah-tipe'] = 'DataTipeController/ubahTipe';
$route['del-tipe'] = 'DataTipeController/hapus';


// $route['tipe-pegawai'] = 'DataMasterController/tipePegawai';
