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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['register'] = 'auth/register';
$route['login'] = 'auth/login';
$route['logout'] = 'auth/logout';
$route['hotels'] = 'welcome/allHotels';
$route['filter/hotels'] = 'welcome/searchHotels';
$route['about'] = 'welcome/aboutUs';
$route['hotels/:num'] = 'welcome/getHotel';
$route['send_question'] = 'welcome/sendQuestion';
$route['reservation'] = 'welcome/reservation';
$route['hotels/getReservedDates'] = 'welcome/getReservedDates';

$route['admin/users'] = 'admin/allUsers';
$route['admin/users/:num/edit'] = 'admin/editUser';
$route['admin/users/:num/save'] = 'admin/saveUser';
$route['admin/users/:num/delete'] = 'admin/deleteUser';

$route['admin/hotels'] = 'admin/allHotels';
$route['admin/hotels/:num/edit'] = 'admin/editHotel';
$route['admin/hotels/:num/save'] = 'admin/saveHotel';
$route['admin/hotels/:num/delete'] = 'admin/deleteHotel';
$route['admin/hotels/add'] = 'admin/addHotel';
$route['admin/hotels/submitHotel'] = 'admin/submitHotel';

$route['admin/rooms'] = 'admin/allRooms';
$route['admin/rooms/:num/edit'] = 'admin/editRooms';
$route['admin/rooms/:num/save'] = 'admin/saveRoom';
$route['admin/rooms/:num/delete'] = 'admin/deleteRoom';
$route['admin/rooms/add'] = 'admin/addRoom';
$route['admin/hotels/submitRoom'] = 'admin/submitRoom';

$route['admin/pictures'] = 'admin/allPictures';
$route['admin/pictures/:num/edit'] = 'admin/editPictures';
$route['admin/pictures/:num/save'] = 'admin/savePicture';
$route['admin/pictures/:num/delete'] = 'admin/deletePicture';
$route['admin/pictures/add'] = 'admin/addPicture';
$route['admin/pictures/submitPicture'] = 'admin/submitPicture';

$route['owner/:num'] = 'owner';
$route['owner/:num/allReservations'] = 'owner/allReservations';

$route['user/:num'] = 'user';
$route['user/:num/myReservations'] = 'user/myReservations';
$route['user/reservations/:num/delete'] = 'user/deleteReservation';
$route['user/data/:num/edit'] = 'user/editUser';
$route['user/data/:num/save'] = 'user/saveUser';
$route['user/password'] = 'user/password';
$route['user/password/:num/change'] = 'user/changePassword';