<?php

    $page = $_GET['page'];

        if ($_SESSION['id']=="") {

            include("pages/akses/login.php");
            
        } else {
            if (!file_exists("pages/$page.php")) {
                header("location:index.php?page=beranda");
            }else{
                include("pages/$page.php");
            }
        }

        include("template/$template.php");

    // $page = $_GET['page'];

    // if ($page == "") {
    //     include("pages/login.php");
    // } else {
    //     if (!file_exists("pages/$page.php")) {
    //         die("Halaman tidak tersedia!");
    //     }else{
    //         include("pages/$page.php");
    //     }
    // }

    // include("template/$template.php");
?>