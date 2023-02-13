<?php 
require_once './vendor/autoload.php';
use Chandachewe\Filtration\Validator;



it('asserts Email is Valid', function () {
   // Prepare
   $validate_email = new Validator();
 
   // Act
  
  $validate = $validate_email->email('chewec03@gmail.com');


   // Assert
   expect($validate)->toEqual(1);
 
    
});



