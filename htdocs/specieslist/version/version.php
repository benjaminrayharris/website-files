<?php 
    // Initialize CURL, store data, and close CURL connection
    $ch = curl_init('https://github.com/benjaminrayharris/SpeciesList/raw/master/version');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
    $str = curl_exec($ch);
    curl_close($ch);
    print trim($str);
?>