<?php

namespace app\core;

abstract class Model
{

    /* Reglas de validacion */
    public const RULE_REQUIRE = 'required';
    public const RULE_EMAIL = 'email';
    public const RULE_MATCH = 'match';
    public const RULE_MIN = 'min';
    public const RULE_MAX = 'max';

    public array $errors = [];

    public function loadData($data)
    {
        /* We go through the received data and compare them if they coincide with the 
        properties of the existing model. If it is true, we set the properties with 
        their respective value; */

        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }

    abstract public function rules(): array;

    public function validate()
    {
        foreach ($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = (is_array($rule) ? $rule[0] : $rule);
                if ($ruleName === self::RULE_REQUIRE  && !$value) {
                    $this->addError($attribute, self::RULE_REQUIRE);
                }
            }
        }
        return empty($this->errors);
    }

    public function addError(string $attribute, string $rule)
    {
        $message = $this->ErrorMessages()[$rule] ?? '';
        $this->errors[$attribute][] = $message;
    }

    public function ErrorMessages()
    {
        return [
            self::RULE_REQUIRE => 'This field is required.',
            self::RULE_EMAIL => 'The field must be valid.',
            self::RULE_MAX => 'max length of this field is {max}.',
            self::RULE_MIN => 'min length of this field is {min}.',
            self::RULE_MATCH => 'This field must be same as {match}',
        ];
    }
}
