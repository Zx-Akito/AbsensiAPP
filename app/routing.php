<?php

    $page = $_GET['page'];

        if ($_SESSION['username']=="") {
            if($page=="")
            {

                include("pages/akses/absen.php");
            }
            else
            {
                include("pages/akses/login.php");
            }
            
        } else {
            if (!file_exists("pages/$page.php")) {
                header("location:index.php?page=beranda");
            }else{
                include("pages/$page.php");
            }
        }

        include("template/$template.php");
?>