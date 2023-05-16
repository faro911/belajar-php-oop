C<?php
    
    class ValidationUtil
    {
        static function validate(LoginRequest $request){
            if(!isset($request->username)){
                throw new ValidationException("Username is null");
            } else if (!isset($request->password)){
                throw new ValidationException("passowrd  is null");
            }
        }

        static function ValidateReflection($request){ //bisa untuk memvalidasi kelas apapun hanya memanggil function ini
            $reflection = new ReflectionClass($request);
            $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

            foreach ($properties as $property){
                if(!$property->isInitialized($request)){
                    throw new ValidationException("$property->name is not set");
                } else if(is_null($property->getValue($request))) {
                    throw new ValidationException("$property->name is null");
                }
            }
        }
    }

    
?>