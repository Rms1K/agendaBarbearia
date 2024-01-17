<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function login()
    {
        $session = session();

        $msgErro = $session->getFlashdata('msgErro');
        $msgEditardados = $session->getFlashdata('msgEditardados');
        
        $usuario = $session->get('email');

        if($usuario != NULL){
            return redirect()->to(base_url('agendar'));
        }

        $dadosView = [
            'msgErro' => $msgErro,
            'msgEditardados' =>$msgEditardados
        ];

        return view('login', $dadosView);
    }

    public function logout()
    {
        $session = session();

        $session->remove('email');

        return redirect()->to(base_url('/'));
    }

    public function dadosLogin()
    {
        $session = session();
        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $usuarioModel = new \App\Models\UsuarioModel();

        if ($usuarioModel->AuthLogin($email, $senha)){


            $dadosSessao = [
                'email' => $email
            ];

            $session->set($dadosSessao);

            return redirect()->to(base_url('agendar'));
        }else{

            $session->setFlashdata('msgErro', 'Email ou senha inválidos!');
            return redirect()->to(base_url('login'));
        }
    }

    public function recuperacaoSenha()
    {
        return view('recuperacaoSenha');
    }

    public function Contato()
    {
        return view('contato');
    }

    

   
}
