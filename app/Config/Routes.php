<?php

 use CodeIgniter\Router\RouteCollection;

 /** @var RouteCollection $routes */


 $routes->get('/', 'Products::index'); // Define o CRUD como página inicial
 $routes->get('/produtos', 'Products::index');
 $routes->get('/produtos/novo', 'Products::create');
 $routes->post('/produtos/salvar', 'Products::store');
 $routes->get('/produtos/editar/(:num)', 'Products::edit/$1');
 $routes->post('/produtos/atualizar/(:num)', 'Products::update/$1');
 $routes->get('/produtos/deletar/(:num)', 'Products::delete/$1'
);
