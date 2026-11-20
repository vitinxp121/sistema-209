<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home','ConteudoController::index');
$routes->get('/contato', 'ConteudoController::contato');

// Rotas que exigem autenticação por sessão
$routes->group('', ['filter' => 'session'], static function ($routes) {
    $routes->get('conteudos', 'Admin\Painel::listar');
    $routes->get('conteudos/editar/(:num)', 'Admin\Painel::editar/$1');
    $routes->post('conteudos/atualizar/(:num)', 'Admin\Painel::atualizar/$1');
});

// Exemplo de rota exclusiva para administradores
   $routes->get('admin', 'Admin\Painel::index', [
    'filter' => ['session', 'group:admin'],
   ]);

// Rotas padrão do Shield. Mantenha se o setup já tiver incluído.
service('auth')->routes($routes);


// Painel: exige login e grupo admin
$routes->get('admin', 'Admin\Painel::index', [
'filter' => ['session', 'group:admin'],
]);
// Logout: aceita apenas usuários autenticados
$routes->post('admin/sair', 'Admin\Painel::logout', [
'filter' => 'session',
]);
