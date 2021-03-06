<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['logout'] = 'frontend/logout';

$route['listmydog'] = 'frontend/user/listmydog';
$route['donation-history'] = 'frontend/user/donationhistory';
$route['sponsor-history'] = 'frontend/user/sponsorhistory';
$route['adopt'] = 'frontend/adopt';
$route['adopt/(:any)'] = 'frontend/adoptpet/index/$1';

$route['franchies'] = 'frontend/franchies';
$route['news'] = 'frontend/news/news';

$route['watch-news/(:any)'] = 'frontend/news/viewnews/index/$1';

$route['gallary/(:any)'] = 'frontend/gallary/index/$1';
$route['events'] = 'frontend/news/events';
$route['mydogs'] = 'frontend/user/mydogs';

$route['term'] = 'frontend/term';
$route['profile'] = 'frontend/user/profile';
$route['adopted-pet'] = 'frontend/user/adoptedpet';
$route['about-idb'] = 'frontend/aboutidb';
$route['about-mad'] = 'frontend/aboutmad';
$route['about-viren'] = 'frontend/aboutvs';
$route['about-kcr'] = 'frontend/aboutkcr';
$route['about-paws'] = 'frontend/aboutpaws';
$route['adoptpet/adoption/(:any)'] = 'frontend/adoptionform/index/$1';
$route['contact-us'] = 'frontend/contact';
$route['volunteer'] = 'frontend/volunteer';
$route['surrender'] = 'frontend/surrender';
$route['privacy-policy'] = 'frontend/privacy';

/* dog care */
$route['nutrition'] = 'frontend/dogcare/nutrition/nutrition';
$route['grooming'] = 'frontend/dogcare/grooming/grooming';
$route['problems'] = 'frontend/dogcare/problems/problems';
$route['petcare'] = 'frontend/dogcare/petcare/petcare';
$route['training'] = 'frontend/dogcare/training/training';
$route['breed'] = 'frontend/dogcare/breed/breed';
$route['givingup'] = 'frontend/dogcare/givingup/givingup';
$route['behave'] = 'frontend/dogcare/behave/behave';
$route['getting'] = 'frontend/dogcare/getting/getting';
$route['gallary'] = 'frontend/gallary';

$route['nutrition/(:any)'] = 'frontend/dogcare/nutrition/postview/index/$1';
$route['grooming/(:any)'] = 'frontend/dogcare/grooming/postview/index/$1';
$route['problems/(:any)'] = 'frontend/dogcare/problems/postview/index/$1';
$route['petcare/(:any)'] = 'frontend/dogcare/petcare/postview/index/$1';
$route['training/(:any)'] = 'frontend/dogcare/training/postview/index/$1';
$route['givingup/(:any)'] = 'frontend/dogcare/givingup/postview/index/$1';
$route['behave/(:any)'] = 'frontend/dogcare/behave/postview/index/$1';
$route['getting/(:any)'] = 'frontend/dogcare/getting/postview/index/$1';
$route['breed/(:any)'] = 'frontend/dogcare/breed/postview/index/$1';
/* end */

/* ways to give */
$route['donate'] = 'frontend/waystogive/donate';
$route['pet-memorial'] = 'frontend/waystogive/petmemorial';
$route['gift-giving'] = 'frontend/waystogive/giftgiving';
$route['other-ways-to-give'] = 'frontend/waystogive/otherways';
$route['sponsor-an-animal'] = 'frontend/waystogive/sponsor';
$route['sponsorpet/(:any)'] = 'frontend/waystogive/sponsorsingle/index/$1';
$route['petmemorial/(:any)'] = 'frontend/waystogive/viewpetmemo/index/$1';

$route['sponsor-an-animal/sponsor/(:any)'] = 'frontend/waystogive/sponsorform/index/$1';
/* end */



$route['default_controller/login'] = 'login';
$route['404_override'] = 'Error404';
$route['translate_uri_dashes'] = FALSE;
