<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



// Rotas BAIXA DE CRT
$routes->group('crt',  ['namespace' => 'App\Controllers\Analises\CRT'], static function ($routes) {
    $routes->get('/', 'Listagem::index', ['as'=>'crt.listagem.index'] );
    $routes->get('inclusao', 'Listagem::index', ['as'=>'crt.listagem.inclusao'] );
    $routes->get('analise/(:num)', 'Analise::index/$1', ['as'=>'crt.analise.index'] );
    $routes->get('pdf/(:num)', 'Pdf::index/$1', ['as'=>'crt.pdf.index'] );
    $routes->get('email/(:num)', 'Email::index/$1', ['as'=>'crt.email.index'] );
});


// Rotas BAIXA DE RT
$routes->group('baixa-rt',  ['namespace' => 'App\Controllers\Analises\BaixaRT'], static function ($routes) {

    $routes->get('/', 'Listagem::index', ['as'=>'baixart.listagem.index'] );
    $routes->get('inclusao', 'Listagem::index', ['as'=>'baixart.listagem.inclusao'] );
    $routes->get('analise/(:num)', 'Analise::index/$1', ['as'=>'baixart.analise.index'] );
    $routes->get('email/(:num)', 'Email::index/$1', ['as'=>'baixart.email.index'] );

});