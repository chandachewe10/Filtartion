<?php

require_once './vendor/autoload.php';
use Chandachewe\Filtration\Validator;

it('asserts String is Valid', function () {
    // Prepare
    $validate_string = new Validator();

    // Act
    $validate = $validate_string->filtrateString('L');

    // Assert
    expect($validate)->toEqual(1);
});
