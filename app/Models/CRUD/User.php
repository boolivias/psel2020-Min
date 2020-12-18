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
        $data['user_status'] = 1;
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

        return $result && password_verify($password, $result->user_password) ? $result->user_id : false;
    }

    /**
     * Verifica se o usuário tem uma permissão
     * @param int $userID
     * @param String $permission Permissão a ser verificada
     * @return bool Verdadeiro se possui a permissão, falso se não possui.
     */
    public function verifyPermission($userID, $permission)
    {
        $builder = db_connect()->table('tb_access');
        $builder->select('*')
            ->where(
                'acs_id',
                // Subquery para puxar o ID do nível de acesso do usuário
                $builder->select('user_acs_id')
                    ->from('tb_user')
                    ->where('user_id', $userID)->get()->getFirstRow()->user_acs_id
            );

        $result = $builder->get()->getFirstRow();

        var_dump($result->acs_dashboard == 1);

        switch ($permission) {
            case 'edit':
                return $result->acs_edit == 1;

            case 'changeAccess':
                return $result->acs_changeAccess == 1;

            case 'changeStatus':
                return $result->acs_changeStatus == 1;

            case 'dashboard':
                return $result->acs_dashboard == 1;
        }
    }

    public function isActive($id)
    {
        $u = parent::where('user_id', $id)->get()->getFirstRow();
        return $u && $u->user_status == 1;
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
