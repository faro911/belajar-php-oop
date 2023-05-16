<?php
    
    class Data{
        var string $satu = "FIRST";
        public string $dua = "SECOND";
        private string $tiga = "THIRD";
        protected string $empat = "FORTH";
    }

    //ini contoh iterator advance secara manual
    class Data2 implements IteratorAggregate{
        var string $satu = "FIRST";
        public string $dua = "SECOND";
        private string $tiga = "THIRD";
        protected string $empat = "FORTH";

        public function getIterator()
        {
            // $array = [
            //     "first" => $this->satu,
            //     "second" => $this->dua,
            //     "third" => $this->tiga,
            //     "forth" => $this->empat,
            // ];

            // return new ArrayIterator($array);

            //bisa pakai yield tanpa return jd mudah
            yield "first" => $this->satu;
            yield "second" => $this->dua;
            yield "third" => $this->tiga;
            yield "forth" => $this->empat;
        }
    }

    $data = new Data();
    foreach($data as $property => $value){
        echo "$property : $value" . PHP_EOL;
    } // yang keluar satu dan duaa, tiga empat tidak keluar karena bersifat private dan protected
    

    $data2 = new Data2();
    foreach($data2 as $property1 => $value1){
        echo "$property1 : $value1" . PHP_EOL;
    }


?>