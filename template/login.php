<?php
    echo "
    <!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>$title</title>
            <link href='https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap' rel='stylesheet'>
            <link rel='stylesheet' href='./assets/css/owl.carousel.min.css'>
            <!-- Bootstrap CSS -->
            <link rel='stylesheet' href='./assets/css/bootstrap.min.css'>
            <!-- Style -->
            <link rel='stylesheet' href='./assets/css/login.css?'>
            <link rel='stylesheet' href='./assets/fonts/icomoon/style.css'>
        </head>

        <body>
            $konten

            <script src='https://www.google.com/recaptcha/api.js'></script>
            <script src='./assets/js/jquery-3.3.1.min.js'></script>
            <script src='./assets/js/popper.min.js'></script>
            <script src='./assets/js/bootstrap.min.js'></script>
            <script src='./assets/js/main.js?'></script>
            <script src='./assets/js/style.js?'></script>
            <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            $alert
        </body>
    ";
?>