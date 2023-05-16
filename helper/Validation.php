<?php
    

    function validateLoginRequest(LoginRequest $request)
    {
        if(!isset($request->username)){
            throw new ValidationException("Ussername is null");
        } else if(!isset($request->password)){
            throw new ValidationException("Password is null");
        } else if(trim($request->username) == ""){
            throw new Exception("Ussername is empty");
        } else if(trim($request->password) == ""){
            throw new Exception("password is empty");
        }
    }
?>