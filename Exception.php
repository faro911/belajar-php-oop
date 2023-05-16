<?php
    
    require_once "exception/ValidationException.php";
    require_once "data/LoginRequest.php";
    require_once "helper/Validation.php";

    //untuk membuat exception logn perlu wajib diperhatikan

    $loginRequest = new LoginRequest();
    $loginRequest->username = "sdasd";
    // $loginRequest->password = "dasdsd"; 

    try{
        validateLoginRequest($loginRequest);
        echo "Valid" . PHP_EOL;
    }catch (ValidationException | Exception $exception){ //catch untuk menangkap error
        echo "error : {$exception->getMessage()}" . PHP_EOL;

        var_dump($exception->getTrace()); // bisa untuk mencari debug menghasilkan array
        echo $exception->getTraceAsString() . PHP_EOL; // ini untuk mencari debug berbentuk string 
    } finally {
        echo "ERROR ATAU TIDAK TETAP DI EKSEKUSI untuk finaaly" . PHP_EOL;
    }

    
?>