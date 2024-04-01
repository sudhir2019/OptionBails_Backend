<?php
// header('Access-Control-Allow-Origin: http://localhost:8080');
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
// header('Access-Control-Allow-Headers: Content-Type');

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/login', 'Auth::login');
$routes->get('/signup', 'Home::signup');
$routes->get('/dashboard', 'Auth::dashboard');
$routes->post('/loginprocess', 'Auth::loginprocess');
$routes->get('/logout', 'Auth::logout');


//sidebar component

// for indice
$routes->get('/createIndices', 'indice::createIndices');
$routes->get('/createIndicesf', 'indice::createIndicesf');
$routes->match(['get','post'],'createIndicesedit/(:any)', 'indice::createIndicesedit/$1');
$routes->match(['get','post'],'delete/(:any)', 'indice::delete/$1');
$routes->post('/updateTable','indice::updateTable');
$routes->post('indice/insert', 'indice::insert');


// for teams
$routes->get('/createteam', 'createteam::createteams');

//api's
$routes->get('/api/userList', 'api\UserController::index');
