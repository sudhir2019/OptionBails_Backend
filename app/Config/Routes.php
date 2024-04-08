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
$routes->match(['get','post'],'delete/(:any)', 'indice::delete/$1');
$routes->match(['get','post'],'createIndicesedit/(:any)', 'indice::createIndicesedit/$1');
$routes->post('/updateTable','indice::updateTable');
$routes->post('indice/insert', 'indice::insert');


// for teams
$routes->get('/createteam', 'createteam::createteams');
$routes->post('createteam/insert', 'createteam::insert');
$routes->match(['get','post'],'deleteteam/(:any)', 'createteam::deleteteam/$1');
$routes->match(['get','post'],'createteamsf/(:any)', 'createteam::createteamsf/$1');
$routes->post('/updateTablee','createteam::updateTablee');

// for user account
$routes->get('/createUseraccount', 'creteuser::createUseraccount');
$routes->get('/createUseraccountf', 'creteuser::createUseraccountf');
$routes->post('creteuser/insert', 'creteuser::insert');
$routes->match(['get','post'],'deleteuser/(:any)', 'creteuser::deleteuser/$1');

$routes->match(['get','post'],'createUseraccountedit/(:any)', 'creteuser::createUseraccountedit/$1');
$routes->post('/updateTablle','creteuser::updateTablle');


// for series
// t20ipl
$routes->get('/allseries', 'series::allseries');
$routes->get('/addcustomseries', 'series::addcustomseries');
$routes->get('/getMatchList', 'series::getMatchList');
$routes->get('/makeIndex', 'series::makeIndex');
$routes->post('series/insertseries', 'series::insertseries');

//api's
$routes->get('/api/userList', 'api\UserController::index');
