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

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'FrontController';
$route['start'] = 'FrontController/start';
$route['question'] = 'FrontController/question';
$route['answer'] = 'FrontController/answer';
$route['score'] = 'FrontController/score';
$route['leaderboard'] = 'FrontController/leaderboard';
$route['logout'] = 'FrontController/logout';

// Administrator
$route['administrator'] = 'AdministratorController';
$route['administrator/question'] = 'QuestionController';
$route['administrator/question/add'] = 'QuestionController/add';
$route['administrator/question/update/(:any)'] = 'QuestionController/update/$1';
$route['administrator/question/delete/(:any)'] = 'QuestionController/delete/$1';

$route['administrator/ranking/all'] = 'RankingController/all';
$route['administrator/ranking/top'] = 'RankingController/top';
$route['administrator/ranking/all/delete/(:any)'] = 'RankingController/delete_rank_all/$1';
$route['administrator/ranking/top/delete/(:any)'] = 'RankingController/delete_rank_top/$1';

$route['administrator/user'] = 'UserController';
$route['administrator/user/add'] = 'UserController/add';
$route['administrator/user/update/(:any)'] = 'UserController/update/$1';
$route['administrator/user/delete/(:any)'] = 'UserController/delete/$1';

$route['administrator/login'] = 'AdministratorController/login';
$route['administrator/logout'] = 'AdministratorController/logout';