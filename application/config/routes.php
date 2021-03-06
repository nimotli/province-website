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
$route['default_controller'] = 'page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Article routes
$route['article'] = 'article';
$route['article/show/(:num)']='article/show/$1';
$route['article/create'] = 'article/create';
$route['article/store'] = 'article/store';
$route['article/edit/(:num)']='article/edit/$1';
$route['article/update/(:num)']='article/update/$1';
$route['article/delete/(:num)']='article/destroy/$1';

//Category routes
$route['categorie'] = 'category';
$route['categorie/show/(:num)']='category/show/$1';
$route['categorie/create'] = 'category/create';
$route['categorie/store'] = 'category/store';
$route['categorie/edit/(:num)']='category/edit/$1';
$route['categorie/update']='category/update';
$route['categorie/delete/(:num)']='category/destroy/$1';

//Slider routes
$route['slider'] = 'slider';
$route['slider/show/(:num)']='slider/show/$1';
$route['slider/create'] = 'slider/create';
$route['slider/store'] = 'slider/store';
$route['slider/edit/(:num)']='slider/edit/$1';
$route['slider/update']='slider/update';
$route['slider/editimg/(:num)']='slider/editImg/$1';
$route['slider/delete/(:num)']='slider/destroy/$1';
$route['slider/updateImg']='slider/updateImg';