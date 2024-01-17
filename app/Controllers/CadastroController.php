<?php

namespace App\Controllers;

class CadastroController extends BaseController
{
    public function cadastro()
    {
        $session = session();

        $msgConfirmaCadastro = $session->getFlashdata('msgConfirmaCadastro');
        $msgSenhaDiferente = $session->getFlashdata('msgSenhaDiferente');
        $msgEmailjaCadastrado = $session->getFlashdata('msgEmailjaCadastrado');
        $msgUsuariojaCadastrado = $session->getFlashdata('msgUsuariojaCadastrado');
       
        $dadosView = [
            'msgConfirmaCadastro' => $msgConfirmaCadastro,
            'msgSenhaDiferente' => $msgSenhaDiferente,
            'msgEmailjaCadastrado' => $msgEmailjaCadastrado,
            'msgUsuariojaCadastrado' => $msgUsuariojaCadastrado
        ];
        
        return view ('cadastro', $dadosView);
    }

    public function dadosCadastro()
    {
        $nome = $this->request->getPost('nome');
        $email = $this->request->getPost('email');
        $celular = $this->request->getPost('celular');
        $senha = $this->request->getPost('senha');
    
        $dataNasc = $this->request->getPost('data_nascimento');
        

        $dados = [
            'nome' => $nome,
            'email' => $email,
            'telefone' => $celular,
            'senha' => $senha,
        ];

        $usuarioModel = new \App\Models\UsuarioModel();


        $usuarioModel->insert($dados);
        
        $session = session();
        $session->setFlashdata('msgConfirmaCadastro', 'Cadastrado com sucesso!');

        return redirect()->to(base_url('cadastro'));
    }

    
}
