<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['user_cpf', 'user_name', 'user_email', 'user_password', 'user_urlPhoto', 'user_status', 'user_acs_id'];
    protected $returnType = 'object';
    protected $beforeInsert = ['encryptPass'];

    protected $validationRules = [
        'user_cpf'      => 'required|is_unique[tb_user.user_cpf]|numeric|exact_length[11]',
        'user_name'     => 'required|alpha_space|min_length[6]',
        'user_email'    => 'required|valid_email|is_unique[tb_user.user_email]',
        'user_password' => 'required|min_length[8]',
        'confirmPass'   => 'required_with[user_password]|matches[user_password]',
        'user_urlPhoto' => 'required',
        'user_acs_id'   => 'is_not_unique[tb_access.acs_id]',
        'user_urlPhoto' => 'uploaded[user_photo]|mime_in[user_photo,image/png,image/jpg,image/jpeg]|max_size[user_photo,5000]'
    ];

    protected $validationMessages = [
        'user_cpf' => [
            'required'     => 'Campo obrigatório',
            'is_unique'    => 'CPF já cadastrado',
            'numeric'      => 'CPF inválido',
            'exact_length' => 'CPF inválido',
        ],
        'user_name' => [
            'required'      => 'Campo obrigatório',
            'alpha_space'   => 'Nome inválido',
            'min_length' => 'O nome deve ter mais de 6 caracteres'
        ],
        'user_email' => [
            'required'    => 'Campo obrigatório',
            'valid_email' => 'E-mail inválido',
            'is_unique'   => 'E-mail já cadastrado'
        ],
        'user_password' => [
            'required'   => 'Campo obrigatório',
            'min_length' => 'A senha deve ter no mínimo 8 caracteres'
        ],
        'confirmPass' => [
            'required_with' => 'Campo obrigatório',
            'matches'       => 'Confirmação de senha incorreta'
        ],
        'user_urlPhoto' => [
            'uploaded' => 'Obrigatório o envio de uma foto do usuário',
            'mime_in'  => 'A foto em alguma das extensões: .png, .jpg, .jpeg',
            'max_size' => 'A imagem ultrapassa o tamanho de 5 MB'
        ],
        'user_acs_id' => [
            'is_not_unique' => 'Nível de acesso não encontrado.'
        ]
    ];

    protected function encryptPass(array $dt)
    {
        if (isset($dt['data']['user_password'])) {
            $dt['data']['user_password'] = password_hash($dt['data']['user_password'], PASSWORD_BCRYPT);
        }

        return $dt;
    }
}
