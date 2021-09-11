<?php

namespace App\Models;

use CodeIgniter\Model;

class IncidenteModel extends Model
{
    protected $table      = 'incidente';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = false;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['tipo', 'nome', 'localizacao', 'data_cadastro', 'path_foto', 'condicao_incidente'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
