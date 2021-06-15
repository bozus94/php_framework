<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $firstName, $lastName, $email, $user, $password, $confirmPassword, $terms;

    public function __construct($data)
    {
        $this->loadData($data);
        $this->validate();
    }

    public function rules(): array
    {
        return [];
    }
}
