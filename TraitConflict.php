<?php
    
    trait A{
        function doA(): void
        {
            echo "a" . PHP_EOL;
        }

        function doB(): void
        {
            echo "b" . PHP_EOL;
        }
    }
    trait B{
        function doA(): void
        {
            echo "A" . PHP_EOL;
        }

        function doB(): void
        {
            echo "B" . PHP_EOL;
        }
    }

    class Sample
    {
        // use A,B; //hal ini akan error conlfit function nya karena memilik function yang sama, untuk mengakali hal ter sebut dapat dilakukan hal sebagai berikut
        use A, B {
            A::doA insteadof B;
            B::doB  insteadof A; 
        }   //hal ini tidak akan error karena sudah dipilah dengan insteadof
    }

    $sample = new Sample();
    $sample->doA();
    $sample->doB();
?>