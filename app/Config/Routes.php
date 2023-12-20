<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// View
$routes->get('/', 'Home::index');
$routes->get('packages/', 'PackageController::index');
$routes->get('packages/create', 'PackageController::create');
$routes->get('booking/', 'BookingController::index');
$routes->get('services/', 'ServiceController::index');
$routes->get('services/create', 'ServiceController::create');
$routes->get('blog/', 'BlogController::index');
$routes->get('blog/create/', 'BlogController::create');
$routes->get('guides/', 'GuideController::index');
$routes->get('guides/create', 'GuideController::create');
$routes->get('messages/', 'MessageController::index');
$routes->get('messages/unread/', 'MessageController::unread');
$routes->get('testimonial/', 'TestimonialController::index');

// delete:
$routes->get('packages/delete/(:num)', 'PackageController::delete/$1');
$routes->get('blog/delete/(:num)', 'BlogController::delete/$1');
$routes->get('guides/delete/(:num)', 'GuideController::delete/$1');
$routes->get('messages/delete/(:num)', 'MessageController::delete/$1');
$routes->get('services/delete/(:num)', 'ServiceController::delete/$1');
$routes->get('testimonial/delete/(:num)', 'TestimonialController::delete/$1');

// edit
$routes->get('packages/edit/(:num)', 'PackageController::edit/$1');
$routes->get('blog/edit/(:num)', 'BlogController::edit/$1');
$routes->get('guides/edit/(:num)', 'GuideController::edit/$1');
$routes->get('messages/edit/(:num)', 'MessageController::edit/$1');
$routes->get('services/edit/(:num)', 'ServiceController::edit/$1');

// update
$routes->post('packages/update/(:num)', 'PackageController::update/$1');
$routes->post('blog/update/(:num)', 'BlogController::update/$1');
$routes->post('guides/update/(:num)', 'GuideController::update/$1');
$routes->post('messages/update/(:num)', 'MessageController::update/$1');
$routes->post('services/update/(:num)', 'ServiceController::update/$1');

// store
$routes->post('blog/store', 'BlogController::store');