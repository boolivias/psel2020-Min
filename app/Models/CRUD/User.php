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
        if ($return = parent::insert($data, $returnID)) {
            $photo->store($this->pathPhoto(), $this->namePhoto($data, $photo));
        }

        return $return;
    }

    /**
     * Verifica se as credenciais são válidas
     * @param String $credential pode ser CPF ou E-mail
     * @param String $password
     * @return String/boolean Retorna o id se credenciais válidas e falso caso inválidas.
     */
    public function credentialIsValid($credential, $password)
    {
        $builder = db_connect()->table('tb_user');
        $builder->select('user_id, user_password')
            ->where('user_cpf', $credential)
            ->orWhere('user_email', $credential);

        $result = $builder->get()->getFirstRow();

        return password_verify($password, $result->user_password) ? $result->user_id : false;
    }

    public function pathPhoto()
    {
        return $this->defaultPathPhoto;
    }

    /**
     * Deixa o nome da foto no padrão estabelecido, com os dados do usuário
     * @param array $dt Dados do usuário
     * @param File $photo Foto recebida pelo forms
     * @return String Nome da foto usado para armazenar.
     */
    public function namePhoto($dt, $photo)
    {
        return ($dt['user_cpf'] ?? '')
            . '_' . explode(' ', $dt['user_name'] ?? '')[0]
            . '.' . ($photo ? $photo->getClientExtension() : '');
    }
}
