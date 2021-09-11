<?php

namespace App\Models;

use CodeIgniter\Model;

class CidadaoModel extends Model
{
    protected $table      = 'cidadao';
    protected $primaryKey = 'cpf';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['cpf', 'nome_completo', 'email', 'data_nasc', 'num_celular', 'senha'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
