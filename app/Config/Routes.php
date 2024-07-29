<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->match(['get','post'],'/staff','StaffController::login');
 $routes->get('/staff_logout','StaffController::staff_logout');
 $routes->match(['get','post'],'/staff_list','StaffController::staff_list');
 $routes->match(['get','post'],'/staff_edit','StaffController::staff_edit');
 $routes->match(['get','post'],'/staff_profile','StaffController::staff_profile');
 $routes->match(['get','post'],'/staff_create','StaffController::staff_create');
 $routes->match(['get','post'],'/client_list','StaffController::client_list');
 $routes->match(['get','post'],'/client_edit','StaffController::client_edit');
 $routes->match(['get','post'],'/client_create','StaffController::client_create');
 $routes->match(['get','post'],'/visa_type','StaffController::visa_type');
 $routes->match(['get','post'],'/countries','StaffController::countries');
 $routes->post("change_staff_password/(:any)", "StaffController::change_staff_password/$1");
 $routes->post("change_staff_password/(:any)/(:any)", "StaffController::change_staff_password/$1/$2");
 $routes->match(['get','post'],'/forgot_password','StaffController::forgot_password');
 $routes->match(['get','post'],'/verify_otp','StaffController::verify_otp');
 $routes->match(['get','post'],'/change_password','StaffController::change_password');
 $routes->post('status_staff', 'StaffController::status_staff');
//  $routes->get('user_name_check/(:any)', 'StaffController::user_name_check/$1');
 
 

 $routes->match(['get','post'],'/client','ClientController::login');
 $routes->get('/client_logout','ClientController::client_logout');
 $routes->match(['get','post'],'/client_home','ClientController::client_home');
 $routes->match(['get','post'],'/view_visa_request','ClientController::view_visa_request');
 $routes->match(['get','post'],'/client_profile','ClientController::client_profile');
 $routes->post("change_client_password/(:any)", "ClientController::change_client_password/$1");
 $routes->post('status_client', 'ClientController::status_client');
 $routes->get('getClientList/(:num)', 'ClientController::getClientList/$1');


 
 $routes->match(['get','post'],'/visa_request','VisaRequestController::index');
 $routes->match(['get','post'],'/visa_request_list','VisaRequestController::visa_request_list');
 $routes->match(['get','post'],'/create_visa_request','VisaRequestController::create_visa_request');
 $routes->get('get_visa_type', 'VisaRequestController::get_visa_type');
 $routes->match(['get','post'],'/edit_visa_request','VisaRequestController::edit_visa_request');
 $routes->get('download/(:any)', 'VisaRequestController::download/$1');
 $routes->match(['get','post'],'/update_notes','VisaRequestController::update_notes');
 $routes->match(['get','post'],'/create_company','VisaRequestController::create_company');
 $routes->get('get_company_list/(:any)','VisaRequestController::get_company_list/$1');


 $routes->match(['get','post'],'/visa_summary_list','MasterController::visa_summary_list');
 $routes->match(['get','post'],'/visa_summary_create','MasterController::visa_summary_create');
 $routes->match(['get','post'],'/visa_summary_edit','MasterController::visa_summary_edit');
 $routes->match(['get','post'],'/country_list','MasterController::country_list');
 $routes->match(['get','post'],'/country_create','MasterController::country_create');
 $routes->match(['get','post'],'/country_edit','MasterController::country_edit');
 $routes->post('status_country', 'MasterController::status_country');
 $routes->match(['get','post'],'/category_list','MasterController::category_list');
 $routes->match(['get','post'],'/category_create','MasterController::category_create');
 $routes->match(['get','post'],'/category_edit','MasterController::category_edit');




 //web
 $routes->match(['get','post'],'/','WebController::home');
 $routes->match(['get','post'],'/get_cat','WebController::get_cat');
 $routes->match(['get','post'],'/why_choose_us','WebController::why_choose_us');
 $routes->match(['get','post'],'/apply_visa','WebController::apply_visa');
 $routes->match(['get','post'],'/contact','WebController::contact');
 $routes->match(['get','post'],'/terms','WebController::terms');
 $routes->match(['get','post'],'/privacy','WebController::privacy');
 $routes->match(['get','post'],'/track_visa','WebController::track_visa');
 $routes->match(['get','post'],'/visa_info','WebController::visa_info');
 $routes->match(['get','post'],'/contact_request','WebController::contact_request');

//  $routes->match(['get','post'],'/test','WebController::test');

 
 