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
$route['default_controller'] = 'home';
$route['logout'] = 'frontend/logout';

$route['listmydog'] = 'frontend/user/listmydog';
$route['adopt'] = 'frontend/adopt';
$route['adoptpet'] = 'frontend/adoptpet';

$route['franchies'] = 'frontend/franchies';
$route['news'] = 'frontend/news';
$route['mydogs'] = 'frontend/user/mydogs';
$route['profile'] = 'frontend/user/profile';
$route['about-us'] = 'frontend/about';

$route['contact-us'] = 'frontend/contact';
$route['volunteer'] = 'frontend/volunteer';

/* dog care */
$route['nutrition'] = 'frontend/dogcare/nutrition/nutrition';
$route['grooming'] = 'frontend/dogcare/grooming/grooming';
$route['problems'] = 'frontend/dogcare/problems/problems';
$route['petcare'] = 'frontend/dogcare/petcare/petcare';
$route['training'] = 'frontend/dogcare/training/training';
$route['breed'] = 'frontend/dogcare/breed/breed';


$route['nutrition/(:any)'] = 'frontend/dogcare/nutrition/postview/index/$1';
$route['grooming/(:any)'] = 'frontend/dogcare/grooming/postview/index/$1';
$route['problems/(:any)'] = 'frontend/dogcare/problems/postview/index/$1';
$route['petcare/(:any)'] = 'frontend/dogcare/petcare/postview/index/$1';
$route['training/(:any)'] = 'frontend/dogcare/training/postview/index/$1';
/* end */

/* ways to give */
$route['donate'] = 'frontend/waystogive/donate';
$route['pet-memorial'] = 'frontend/waystogive/petmemorial';
$route['gift-giving'] = 'frontend/waystogive/giftgiving';
$route['other-ways-to-give'] = 'frontend/waystogive/otherways';
$route['sponsor-an-animal'] = 'frontend/waystogive/sponsor';
/* end */



$route['default_controller/login'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
