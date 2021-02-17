<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = 'Error404';
$route['translate_uri_dashes'] = FALSE;

$route['/'] = 'Home';
$route['about-us'] = 'Home/about';
$route['contact-us'] = 'Home/contact';
$route['program-flow'] = 'Home/flow';
$route['program-wolf'] = 'Home/wolf';
$route['enquire'] = 'Home/enquiry';
$route['subscribe'] = 'Home/subscribe';
$route['sitemap.xml'] = 'Sitemap';
$route['sitemap'] = 'Sitemap';

$route['events'] = 'Home/events';
$route['event'] = 'Home/event';
$route['events/page/(:num)'] = 'Home/events';
$route['events/page'] = 'Home/events';

$route['blog'] = 'Home/blog';
$route['blog/page/(:num)'] = 'Home/blog';
$route['blog/page'] = 'Home/blog';

$route['gallery'] = 'Home/gallery';
$route['gallery/page/(:num)'] = 'Home/gallery';
$route['gallery/page'] = 'Home/gallery';

$route['blog/category/(:any)'] = 'Blog/All_blogs/$1';
$route['blog/(:num)/(:any)'] = 'Home/blog_post/$1';
$route['blog/category/(:num)/(:any)'] = 'Home/blogCat/$1';
$route['blog/tag/(:any)'] = 'Home/blogTag/$1';
