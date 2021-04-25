<?php
    //start session
    session_start();

    //check if user is loged in
    if (isset($_SESSION['login']) && $_SESSION['login'] === true)
    {
        $login = 'yes';
        $display = $_SESSION['display'];
        $today = date('Y-m-d');
    }
    else
    {
        $login = 'no';
    }