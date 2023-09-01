<?php

namespace App\Models;

use App\Core\Model;

class Register extends Model
{
    public string $name;
    public string $email;
    public string $password;

    public string $passwordConfirmation;

    public function __construct()
    {
    }


    public function register()
    {

    }

    public function rules(): array
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 7], [self::RULE_MAX, 'max' => 10]],
            'passwordConfirmation' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}