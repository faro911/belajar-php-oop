<?php
    
    class Student
    {
        public string $id;
        public string $name;
        public int $value;
        private string $sample;

        public function setSamplee(string $sample): void
        {
            $this->sample = $sample;
        }

        public function __clone(){
            unset($this->sample); // fungsi clone ini bekerja setelah proses cloning slesai, kerjanya clone ini untuk menghapus property dari sample
        }

        public function __toString(){
            return "Student id: $this->id, name:$this->name, value:$this->value";
        }

        public function __invoke(...$arguments):void{
            $join=join(",", $arguments);
            echo "Invoke student with argument $join" . PHP_EOL;
        }
    }
?>