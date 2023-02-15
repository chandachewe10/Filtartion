<?php

namespace Chandachewe\Filtration;

trait Rules
{
    /**
     * Required rule.
     *
     * @var string
     */
    public static function required(string $var)
    {
        if (is_null($var)) {
            return false;
        }
    }

    /**
     * Input Email.
     *
     * @var string
     *
     * @param string $email
     *
     * @return bool
     */
    public static function email(string $email)
    {
        $filtrateEmail = filter_var($email, FILTER_VALIDATE_EMAIL) == true;

        return $filtrateEmail;
    }

    /**
     * Input String.
     *
     * @var string
     *
     * @param string $string
     *
     * @return bool
     */
    public static function string(string $string)
    {
        $filtrateString = is_string($string) == true;

        return $filtrateString;
    }
}
