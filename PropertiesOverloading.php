<?php
    
    class Zero //sebuah function yang terpanggil jika tdak ditemukan property didalam sebuah class, yang biasanya kita mendapati pesan error, kini bisa kita rubah dengan value yang kita inginkan jika tidak menemukan property tersebut dan dibuatkan dinamic propertynya
    {
        private array $properties = [];

        public function __get($name)
        {
            return $this->properties[$name];
        }

        public function __set($name, $value)
        {
            $this->properties[$name] = $value;
        }
        public function __isset($name) : bool
        {
            return isset($this->properties[$name]);
        }

        public function __unset($name)
        {
            unset($this->properties[$name]);
        }

        public function __call($name, $arguments)
        {
            $join=join(",", $arguments);
            echo "Call function $name with arg $join" . PHP_EOL;
        }
        public static function __callStatic($name, $arguments)
        {
            $join=join(",", $arguments);
            echo "Call static function $name with arg $join" . PHP_EOL;
        }

    }

    $zero = new Zero();
    
    $zero->firstName = "Ulo";
    $zero->lastName = "boyo";

    echo "first name : $zero->firstName" . PHP_EOL;
    echo "first name : $zero->lastName" . PHP_EOL;

    $zero-> sayHello("faro", "911");

    
?>