<?php

namespace Chandachewe\Filtration;

class Validator
{
    use Rules;

    /**
     * Validating Data Email.
     *
     * @var string
     *
     * @param string
     *
     * @return bool
     */
    public function filtrateEmail(string $data)
    {
        return Validator::email($data);
    }

    /**
     * Validating Data String.
     *
     * @var string
     *
     * @param string
     *
     * @return bool
     */
    public function filtrateString(string $data)
    {
        return Validator::string($data);
    }

    /**
     * Validating Data String.
     *
     * @var string
     *
     * @param string
     *
     * @return bool
     */
    public function filtrateURL(string $data)
    {
        return Validator::url($data);
    }
}
