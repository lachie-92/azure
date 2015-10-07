<?php


namespace App\Library\Validators;


class ShoppingCartValidator
{
    public function validPaymentOption($attribute, $value, $parameters)
    {
        $paymentOption = ['payal', 'visa'];

        return in_array($value, $paymentOption);
    }

    public function validPaymentOptionError($message, $attribute, $rule, $parameters)
    {
        return 'Invalid Payment Option';
    }
}