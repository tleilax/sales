<?php
    require 'includes/renderer.php';
    require 'includes/config.php';

    $tmp  = file_get_contents($GLOBALS['config']['stash']);
    $stash = json_decode($tmp, true);

    echo render('list', compact('stash'), 'layout');

