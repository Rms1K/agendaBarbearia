<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function agendar()
    {
        $session = session();

        $usuarioSessao = $session->get('email');

        if ($usuarioSessao == NULL){
             return redirect()->to(base_url('login'));
        }

        $horarioModel = new \App\Models\HorarioModel();
        $disponivel = $horarioModel->getDisponibilidade();

     

        $usuarioHorario = $horarioModel->getUsuarioHorario($usuarioSessao);


        $msgConfirmaCadastro = $session->getFlashdata('msgConfirmaCadastro');
       
        

        $usuarioModel = new \App\Models\UsuarioModel();
        $usuario = $usuarioModel->getUsuario($usuarioSessao);

        $todosHorarios = $horarioModel->gethorarios ();

        

        $dadosView = [
            'msgConfirmaCadastro' => $msgConfirmaCadastro, 
            'disponivel' => $disponivel,
            'usuario' => $usuario,
            'usuarioHorario' => $usuarioHorario,
            'todosHorarios' => $todosHorarios
        ];
        
        return view ('agendar', $dadosView);


    }
}
