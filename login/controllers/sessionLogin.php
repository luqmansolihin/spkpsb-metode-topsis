<?php
    session_start();
    if (empty($_SESSION['login'])){
        header('location:login/index.php');
    }else
?>