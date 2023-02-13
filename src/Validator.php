<?php

namespace Chandachewe\Filtration;

class Validator
{
    /**
     * Input String.
     *
     * @var string
     */
    public $string;

    /**
     * Input Email.
     *
     * @var string
     */
    public function email($email){

        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

    }

    /**
     * Input Date.
     *
     * @var string
     */
    public $date;

    /**
     * Input URL.
     *
     * @var string
     */
    public $url;

    /**
     * Input Password.
     *
     * @var string
     */
    public $password;

    /**
     * Input File.
     *
     * @var string
     */
    public $file;

    /**
     * Input Image.
     *
     * @var string
     */
    public $image;

    /**
     * Input IPV4.
     *
     * @var string
     */
    public $ipv4;

    /**
     * Input IPV6.
     *
     * @var string
     */
    public $ipv6;

    /**
     * Input Integer.
     *
     * @var int
     */
    public $integer;

    /**
     * Input NRC.
     *
     * @var string
     */
    public $nrc_zm;

    /**
     * Input Phone.
     *
     * @var double
     */
    public $phone_zm;
}