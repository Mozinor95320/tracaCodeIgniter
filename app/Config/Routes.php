<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\TracabilitySheets;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('tracabilitySheets', [News::class, 'index']);           // Add this line
$routes->get('tracabilitySheets/(:segment)', [News::class, 'show']);
