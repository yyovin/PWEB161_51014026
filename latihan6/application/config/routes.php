<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//ISI LATIHAN 6===========================================================================
$route['biodata'] = 'biodata_yovin'; //berisi informasi biofata
$route['ukmku'] = 'ukm_yovin'; //berisi informasi ukm sesuai tugas mid
$route['ceritaku'] = 'pengalaman_yovin'; //berisi informasi ukm sesuai tugas mid

$route['hr'] = 'hr_buddha'; //berisi informasi hari raya perayaan agama buddha
$route['ab'] = 'ajaran_buddha'; //berisi informasi aliran ajaran agama buddha





//ISI LATIHAN 6===========================================================================




$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
