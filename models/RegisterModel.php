<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $firstName, $lastName, $email, $user, $password, $confirmPassword;
    public string $terms = '';

    /* public function __construct($data)
    {
        $this->loadData($data);
    } */

    public function rules(): array
    {
        return [
            'firstName' => [self::RULE_REQUIRE],
            'lastName' => [self::RULE_REQUIRE],
            'email' => [self::RULE_REQUIRE, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRE, [self::RULE_MAX, 'max' => 20], [self::RULE_MIN, 'min' => 8]],
            'confirmPassword' => [self::RULE_REQUIRE, [self::RULE_MATCH, 'match' => 'password']],
            'terms' => [self::RULE_REQUIRE]
        ];
    }
}
