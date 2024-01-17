<?php

namespace App\Models;

use CodeIgniter\Model;

class HorarioModel extends Model
{
    protected $table      = 'horarios';
    protected $primaryKey = 'id_horarios';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['horario','data','telefone','observacao','disponivel','email_usuario'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getDisponibilidade (){

        $query = $this->db->table('horarios')->select('disponivel')->where('disponivel', false)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function gethorarios (){

        $query = $this->db->table('horarios')->select('horario')->select('data')->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }


    public function getUsuarioHorario ($email){

        $query = $this->db->table('horarios')->select('horario')->select('data')->select('telefone')->where('email_usuario', $email)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    // public function VerificaUsuario ($usuario){

    //     if($this->db->table('usuario')->select('usuario')->where('usuario', $usuario)->get())
    //         return true;

    // } 

    // public function VerificaEmail ($email){

    //     if($this->db->table('usuario')->select('email')->where('email', $email)->get())
    //         return true;
    // } 

    public function getEmail ($email){

        $query = $this->db->table('usuario')->select('email')->where('email', $email)->get();

        if($this->returnType == 'object'){
            return $query->getResult();
        }else{
            return $query->getResultArray();
        }

        return $query->getResult();

    }

    public function AuthLogin($usuario, $senha) {
        
        $query = $this->db->table('usuario')
                         ->where('usuario', $usuario)
                         ->where('senha', $senha)
                         ->get();
    
        if ($this->returnType == 'object') {
            return $query->getResult();
        } else {
            return $query->getResultArray();
        }

        return $query->getResult();
    }
    
}