<?php


namespace app\models;

use app\core\Model;

class RegisterModel extends Model
{
    public ?string $username = null;
    public ?string $email = null;
    public ?string $password = null;
    public ?string $confirmPassword = null;

    public function register()
    {
        echo "Creating new user";
    }

    public function rules(): array
    {
        return [
            'username' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];
    }
}