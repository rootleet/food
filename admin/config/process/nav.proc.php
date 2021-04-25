<?php

    require '../includes/core.inc.php';
    if(isset($_GET['nav']))
    {
        $nav = $_GET['nav'];
        if ($nav === 'display')
        {
            $_SESSION['display'] = $_GET['display'];
            gb();
        }
    }