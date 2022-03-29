<?php

    $page = $_GET['page'];

        if ($_SESSION['username']=="") {

            include("pages/akses/login.php");
            
        } else {
            if (!file_exists("pages/$page.php")) {
                header("location:index.php?page=beranda");
            }else{
                include("pages/$page.php");
            }
        }

        include("template/$template.php");
?>