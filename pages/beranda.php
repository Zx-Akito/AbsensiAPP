<?php

    switch($_SESSION['JenisLog'])
    {
        case "admin":
            include("./navbar/navbar_admin.php");
        break;
        case "user":
            include("./navbar/navbar_user.php");
        break;
    }

    $template = "dashboard";
    $konten = "
        <section class='container section animate__animated animate__fadeInLeft' id='home'>
            <img src='assets/img/a.gif' alt='' style='width:20%;'>
            <h2 class='section__title'>Selamat Datang</h2>
            <h4 class='section__name'>".Pengguna($_SESSION['id'])['nama']."</h4>
        </section>
    ";

    
?>