<?php
    include("navbar.php");
    echo "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>

            <!--=============== BOXICONS ===============-->
            <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css' integrity='sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==' crossorigin='anonymous' referrerpolicy='no-referrer' />

            <!--=============== CSS ===============-->
            <link rel='stylesheet' href='assets/css/styles.css'>
            <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'/>
            
            <title>$title</title>
        </head>
            <body>
                <header class='header' id='header'>
                    <nav class='nav container'>
                        
                        <li class='nav-item dropdown'>
                            <a class='nav-link nav__logo nav__link' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                ZxAkito
                            </a>
                            <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <a class='dropdown-item' href='#'>Profile</a>
                            <div class='dropdown-divider'></div>
                            <a class='dropdown-item' href='?page=akses/logout'>Logout</a>
                            </div>
                        </li>

                        <div class='nav__menu'>
                            $navbar
                        </div>

                        <img src='assets/img/b.gif' alt='' class='nav__img'>
                    </nav>
                </header>

                $konten

                <script src='assets/js/navbar.js'></script>
                <script src='https://code.jquery.com/jquery-3.2.1.slim.min.js' integrity='sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN' crossorigin='anonymous'></script>
                <script src='https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js' integrity='sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q' crossorigin='anonymous'></script>
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js' integrity='sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl' crossorigin='anonymous'></script>
                <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
                $alert
            </body>
        </html>
    ";
?>