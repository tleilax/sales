<?php
    $tmp  = file_get_contents('sales.json');
    $json = json_decode($tmp, true);
    $content = $json['Serien'][0]['title'];

    require 'views/layout.php';

