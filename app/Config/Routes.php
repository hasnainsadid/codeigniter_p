<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
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
