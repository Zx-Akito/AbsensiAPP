<?php

    // switch($_SESSION['JenisLog'])
    // {
    //     case "admin":
    //         include("./template/navbar/navbar_admin.php");
    //     break;
    //     case "user":
    //         include("./template/navbar/navbar_user.php");
    //     break;
    // }

    include("navbar/navbar_admin.php");
    $navbar = "
    <ul class='nav__list mt-3'>
        <li class='nav__item'>
            <a href='?page=beranda' class='nav__link active-link' role='button'>
                <i class='bx bx-home-alt nav__icon'></i>
                <span class='nav__name'>Beranda</span>
            </a>
        </li>
        
        $navbar_mode

    </ul>
    ";
?>