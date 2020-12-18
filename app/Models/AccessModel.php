<?php

namespace App\Models;

use CodeIgniter\Model;

class AccessModel extends Model
{
    protected $table = 'tb_access';
    protected $primaryKey = 'acs_id';
    protected $allowedFields = ['acs_name', 'acs_dashboard', 'acs_edit', 'acs_changeAccess', 'acs_changeStatus'];
    protected $returnType = 'object';
}
