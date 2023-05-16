<?php
    
    $date = new DateTime();
    $date->setDate(1990,1,20);
    $date->setTime(10,10,10);

    $date->add(new DateInterval("P1Y")); // untuk menambah 1 tahun
    $minusOneMonth = new DateInterval("P1M");
    $minusOneMonth->invert = 1; // untuk membalikan, jadi bulan nya tdk bertmbh tp berkurang bisa 1 atau true valuenya

    $date->add($minusOneMonth);
    
    var_dump($date);

    $now = new DateTime();
    var_dump($now);
    $now->setTimezone(new DateTimeZone("Asia/Jakarta")); // berubah time zone nya daari sblumnya default ke Asia/Jakarta bisa dirubah sesuai wktu dan zona
    var_dump($now);

    //jika ingin menjadikan tampilan dengan string
    $string = $now->format("Y-m-d H:i:s");
    echo " waktu saat ini : $string" . PHP_EOL;

    // jika ingin dari string ke format DAte
    $date2 = DateTime::createFromFormat("Y-m-d H:i:s", "1998-12-2 10:10:10", new DateTimeZone("Asia/Jakarta"));
    

    //untuk sample validasi bisa pakai if
    if($date){
        var_dump($date2);
    } else {
        echo "Format Salah" . PHP_EOL;
    }



?>