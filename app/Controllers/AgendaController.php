<?php

namespace App\Controllers;

class AgendaController extends BaseController
{
    public function dadosAgendar()
    {
        $horario = $this->request->getPost('horario');
        $data = $this->request->getPost('data');
        $telefone = $this->request->getPost('telefone');
        $observacao = $this->request->getPost('observacao');
        
    
        $session = session();

        $usuario = $session->get('email');
        

        $dados = [
            'horario' => $horario,
            'data' => $data,
            'telefone' => $telefone,
            'observacao' => $observacao,
            'disponivel' => false,
            'email_usuario' => $usuario
        ];

        $horarioModel = new \App\Models\HorarioModel();


        $horarioModel->insert($dados);
        
        $session = session();
        $session->setFlashdata('msgConfirmaCadastro', 'Marcado com sucesso!');
        // $session->setFlashdata('msgIndisponivel', 'Indisponivel');

        return redirect()->to(base_url('agendar'));
    }

    public function dadosCadastro()
    {
      
    }

    public function meusHorarios()
    {
      
    }

    public function excluirConta()
    {
        $session = session();

        $usuario = $session->get('email');


        $horarioModel = new \App\Models\HorarioModel();


        $horarioModel->where('email_usuario',  $usuario);
        $horarioModel->delete();


        $usuarioModel = new \App\Models\UsuarioModel();

        $usuarioModel->where('email',  $usuario);

        $usuarioModel->delete();
        
        $session->remove('email');

        return redirect()->to(base_url('/'));

    }

    public function meusDadosEditar()
    {

        $nome = $this->request->getPost('nomeEditar');
        $email = $this->request->getPost('emailEditar');
        $celular = $this->request->getPost('celularEditar');
        $senha = $this->request->getPost('senhaEditar');

        

         $usuarioModel = new \App\Models\UsuarioModel();
    
         $session = session();

        $usuario = $session->get('email');
        


        $horarioModel = new \App\Models\HorarioModel();

        $usuarioModel->set('nome', $nome);
        $usuarioModel->set('email', $email);
        $usuarioModel->set('telefone', $celular);
        $usuarioModel->set('senha', $senha);
        $usuarioModel->where('email', $usuario);
        $usuarioModel->update();
        
        return redirect()->to(base_url('agendar'));
      
    }
    

    public function ExcluirHorario()
    {

        $horario = $this->request->getPost('horarioExcluir');
        $data = $this->request->getPost('dataExcluir');       
    


        $horarioModel = new \App\Models\HorarioModel();


        $horarioModel->where('horario',  $horario);
        $horarioModel->where('data',  $data);
        $horarioModel->delete();



        return redirect()->to(base_url('agendar'));
      
    }

    public function EditarHorario()
    {

        $horario = $this->request->getPost('horarioEditar');
        $data = $this->request->getPost('dataEditar');
        $telefone = $this->request->getPost('telefoneEditar');
        $observacao = $this->request->getPost('observacaoEditar');
        $horarioAntesEditar = $this->request->getPost('horarioAntesEditar');
    
        $session = session();

        $usuario = $session->get('email');
        
        

        

        $horarioModel = new \App\Models\HorarioModel();

        $horarioModel->set('horario', $horario);
        $horarioModel->set('data', $data);
        $horarioModel->set('telefone', $telefone);
        $horarioModel->set('observacao', $observacao);
        $horarioModel->where('horario', $horarioAntesEditar);
        $horarioModel->where('email_usuario', $usuario);
        $horarioModel->update();

        return redirect()->to(base_url('agendar'));
    }
    
}
