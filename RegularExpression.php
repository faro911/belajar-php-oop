<?php
    
    $matches = [];
    $result = preg_match_all("/fa|chm|an/i", "Fathur Rochman", $matches);
    var_dump($result); //cek berapa total yang match
    // var_dump($matches);

    //Regular Expression Replace, cocok untuk memfilter fitur seperti komen

    $result2 = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, bangsat");
    var_dump($result2);
?>