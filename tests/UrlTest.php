<?php

require_once './vendor/autoload.php';
use Chandachewe\Filtration\Validator;

it('asserts URL is Valid', function () {
    // Prepare
    $validate_string = new Validator();

    // Act
    $validate = $validate_string->filtrateURL('https://www.pesttesting.com');

    // Assert
    expect($validate)->toEqual(1);
});
