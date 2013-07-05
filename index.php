<?php
    require 'includes/renderer.php';

    $tmp  = file_get_contents('sales.json');
    $stash = json_decode($tmp, true);

    echo render('list', compact('stash'), 'layout');

