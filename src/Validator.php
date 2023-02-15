<?php

namespace Chandachewe\Filtration;

use Chandachewe\Filtration\Rules;


class Validator
{
    use Rules;
    


    /**
     * Validating Data Email.
     *
     * @var string
     * @param string
     * @return boolean
     */
    public function filtrateEmail(string $data)
    {
      return Validator::email($data);
       
          
    }


    /**
     * Validating Data String.
     *
     * @var string
     * @param string
     * @return boolean
     */
    public function filtrateString(string $data)
    {
      return Validator::string($data);
       
          
    }
}
