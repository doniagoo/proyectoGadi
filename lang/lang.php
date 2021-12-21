<?php
    session_start();
    $absolutePathEsp = $_SERVER['DOCUMENT_ROOT'] . '/GADI/lang/esp.php';
    $absolutePathCat = $_SERVER['DOCUMENT_ROOT'] . '/GADI/lang/cat.php';
    $absolutePathEng = $_SERVER['DOCUMENT_ROOT'] . '/GADI/lang/eng.php';
    include ($absolutePathEsp);
    include ($absolutePathCat);
    include ($absolutePathEng);

    if(!isset($_SESSION['lang']) || $_SESSION['lang'] == ""){
        $_SESSION['lang'] = $langEsp;
    }

    if(isset($_POST['esp'])){
        $_SESSION['lang'] = $langEsp;
        header('Location: ../index.php');
        exit();
    }
    else if(isset($_POST['cat'])){
        $_SESSION['lang'] = $langCat;
        header('Location: ../index.php');
        exit();
    }
    else if(isset($_POST['eng'])){
        $_SESSION['lang'] = $langEng;
        header('Location: ../index.php');
        exit();
    }
    
?>