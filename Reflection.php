<?php
    
    require_once "exception/ValidationException.php";
    require_once "data/LoginRequest.php";
    require_once "helper/ValidationUtil.php";

    $request = new LoginRequest();
    $request->username = "faro";
    $request->password = "rahasia";

    ValidationUtil::ValidateReflection($request);

    class RegisterUserRequest{
        public string $username;
        public string $address;
        public string $email;
    }

    $register = new RegisterUserRequest();
    $register->username = "uye";
    $register->address = "jombang";
    $register->email = "uye@ymail";
    //nah diatas ada class baru kita bisaa menggunakan validationutil nya.
    ValidationUtil::ValidateReflection($register)
?>