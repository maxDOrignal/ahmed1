<?php
    // sessions start
    session_start();

    // file dirs
    $js = 'layout/js/';
    $css = 'layout/css/';
    $img = 'layout/images/';
    $lang = 'layout/languages/';
    $temelts = 'includes/template/';
    $functions = 'includes/functions/';
    $languages = 'includes/languages/';

    // incluide function
    require_once $functions . 'functions.php';


    // incluide php files
    require_once 'connect.php';
    require_once $temelts   . 'header.inc.php';
    require_once $languages . 'en.php';


    

