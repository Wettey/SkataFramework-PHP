<?php


namespace app\core;


abstract class Model
{
    //add validation constants here and then use them in the rule methods as needed
    public const RULE_REQUIRED = 'required';
    public const RULE_EMAIL = 'required';
    public const RULE_MIN = 'required';
    public const RULE_MATCH = 'required';

    public function loadData($data)
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public array $errors = [];

    abstract public function rules(): array;

    public function validate(): bool
    {
        foreach ($this->rules() as $attribute =>$rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                $ruleName = $rule;
                if (!is_string($ruleName)) {
                    $ruleName = $rule[0];
                }
                if ($ruleName === self::RULE_REQUIRED && !$value) {
                    $this->addError($attribute, self::RULE_REQUIRED);
                }
            }
        }
        return empty($this->errors);
    }

    public function addError(string $attribute,string $rule)
    {
        $message = $this->errorMessages()[$rule] ?? '';
        $this->errors[$attribute][] = $message;
    }

    public function errorMessages(): array
    {
        return [
            self::RULE_REQUIRED => 'This field is required',
            self::RULE_EMAIL => 'Must be a valid email address',
            self::RULE_MIN => 'Your password must have at least {min} characters',
            self::RULE_MATCH => "Your passwords didn't match, this field has to match the {match} field",
        ];
    }
}