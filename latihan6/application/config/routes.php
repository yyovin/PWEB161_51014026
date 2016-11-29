<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//ISI LATIHAN 6===========================================================================
$route['biodata'] = 'biodata_yovin'; //berisi informasi biofata
$route['ukmku'] = 'ukm_yovin'; //berisi informasi ukm sesuai tugas mid
$route['ceritaku'] = 'pengalaman_yovin'; //berisi informasi ukm sesuai tugas mid

$route['agamabuddha'] = 'agama_buddha'; //berisi informasi mengenai agama buddha
$route['hr'] = 'hr_buddha'; //berisi informasi hari raya perayaan agama buddha
$route['ab'] = 'ajaran_buddha'; //berisi informasi aliran ajaran agama buddha
$route['jm'] = 'jalan_mulia'; //berisi informasi jalan menuju kebenaran atau jalan mulia 8 unsur
$route['limasila'] = 'lima_sila'; //berisi informasi Sila dalam agama buddha
$route['kitab'] = 'kitabsuci_buddha'; //berisi informasi suci agama buddha
$route['ibadah'] = 'tempat_ibadah'; //berisi informasi tempat ibadah agama buddha
$route['Pemimpin'] = 'pemimpin_buddha'; //berisi informasi suci agama buddha
//ISI LATIHAN 6===========================================================================




$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
