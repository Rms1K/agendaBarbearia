<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); 
$routes->get('agendar', 'Home::agendar');
$routes->get('login', 'LoginController::login');
$routes->get('logout', 'LoginController::logout');
$routes->get('cadastro', 'CadastroController::cadastro');
$routes->post('dadoscadastro', 'CadastroController::dadosCadastro');
$routes->post('dadoslogin', 'LoginController::dadosLogin');
$routes->get('recuperacaosenha', 'LoginController::recuperacaoSenha');
$routes->get('contato', 'LoginController::Contato');
$routes->post('dadosagendar', 'AgendaController::dadosAgendar');
$routes->post('meusdadoseditar', 'AgendaController::meusDadosEditar');
$routes->post('excluirhorario', 'AgendaController::ExcluirHorario');
$routes->post('editarhorario', 'AgendaController::EditarHorario');
$routes->post('excluirconta', 'AgendaController::excluirConta');






