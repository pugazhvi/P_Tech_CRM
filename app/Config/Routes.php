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
 $routes->match(['get','post'],'/forgot_password','StaffController::forgot_password');
 $routes->match(['get','post'],'/verify_otp','StaffController::verify_otp');
 $routes->match(['get','post'],'/change_password','StaffController::change_password');


 $routes->match(['get','post'],'/','ClientController::login');
 $routes->get('/client_logout','ClientController::client_logout');
 $routes->match(['get','post'],'/client_home','ClientController::client_home');
 $routes->match(['get','post'],'/view_visa_request','ClientController::view_visa_request');
 $routes->match(['get','post'],'/client_profile','ClientController::client_profile');
 $routes->post("change_client_password/(:any)", "ClientController::change_client_password/$1");



 $routes->match(['get','post'],'/visa_request','VisaRequestController::index');
 $routes->match(['get','post'],'/visa_request_list','VisaRequestController::visa_request_list');
 $routes->match(['get','post'],'/create_visa_request','VisaRequestController::create_visa_request');
 $routes->get('get_visa_type', 'VisaRequestController::get_visa_type');
 $routes->match(['get','post'],'/edit_visa_request','VisaRequestController::edit_visa_request');
 $routes->get('download/(:any)', 'VisaRequestController::download/$1');
 $routes->match(['get','post'],'/update_notes','VisaRequestController::update_notes');


 $routes->match(['get','post'],'/visa_summary_list','MasterController::visa_summary_list');
 $routes->match(['get','post'],'/visa_summary_create','MasterController::visa_summary_create');
 $routes->match(['get','post'],'/visa_summary_edit','MasterController::visa_summary_edit');
 $routes->match(['get','post'],'/country_list','MasterController::country_list');
 $routes->match(['get','post'],'/country_create','MasterController::country_create');
 $routes->match(['get','post'],'/country_edit','MasterController::country_edit');
 $routes->match(['get','post'],'/category_list','MasterController::category_list');
 $routes->match(['get','post'],'/category_create','MasterController::category_create');
 $routes->match(['get','post'],'/category_edit','MasterController::category_edit');
 