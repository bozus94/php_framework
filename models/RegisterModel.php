<?php

namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public string $firstName = '';
    public string $lastName = '';
    public string $email = '';
    public string $user = '';
    public string $password = '';
    public string $confirmPassword = '';
    public string $terms = '';


    public function rules(): array
    {
        return [
            'firstName' => [self::RULE_REQUIRE],
            'lastName' => [self::RULE_REQUIRE],
            'user' => [self::RULE_REQUIRE],
            'email' => [self::RULE_REQUIRE, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRE, [self::RULE_MAX, 'max' => 8], [self::RULE_MIN, 'min' => 3]],
            'confirmPassword' => [self::RULE_REQUIRE, [self::RULE_MATCH, 'match' => 'password']],
            'terms' => [self::RULE_REQUIRE]
        ];
    }
}
