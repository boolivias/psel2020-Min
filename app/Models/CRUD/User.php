<?php

namespace App\Models\CRUD;

use App\Models\UserModel;

class User extends UserModel
{
    private $defaultPathPhoto = 'users/photo/';
    private $defaultAccessID = 1;

    public function insert($data = null, $photo = null, bool $returnID = true)
    {
        $data['user_acs_id'] = $this->defaultAccessID;
        $data['user_urlPhoto'] = $this->pathPhoto() . $this->namePhoto($data, $photo);
        echo $this->namePhoto($data, $photo);
        if ($return = parent::insert($data, $returnID)) {
            $photo->store($this->pathPhoto(), $this->namePhoto($data, $photo));
        }

        return $return;
    }

    public function pathPhoto()
    {
        return $this->defaultPathPhoto;
    }

    public function namePhoto($dt, $photo)
    {
        return ($dt['user_cpf'] ?? '')
            . '_' . explode(' ', $dt['user_name'] ?? '')[0]
            . '.' . ($photo ? $photo->getClientExtension() : '');
    }
}
