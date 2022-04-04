<?php
    $template = "login";
    $title = "Absen";
    $konten ="
    <div class='container-fluid'>
        <div class='col-3 md-8 mx-5 pt-4 mt-5'>
            <h3>Selamat Datang</h3>
            <p>Hallo Kamu Yang Disana !
            Silahkan Absen dibawah terlebih dahulu
            sebelum masuk kelas, Terima Kasih !</p>
        </div>  
        <div class='d-flex justify-content-center'>
            <div class='col-5 mb-5 mt-3'>
                <div class='card col-3 mx-auto'>
                    <img src='../../assets/img/a.gif' alt='user'>
                </div>
                <div class='col-5 mx-auto my-3'>
                    <h6>Nama  : Rifki Nurmansyah</h6>
                    <h6>Kelas : XII RPL</h6>
                </div>
                <form>
                    <div class='form-group col'>
                        <input type='text' class='form-control' autofocus>
                    </div>
                </form>
            </div>
        </div>        
        <div class='d-flex justify-content-end m-5 pt-4'>
            <a href='?page=akses/login' type='submit' class='btn btn-blue text-white'>Masuk</a>
        </div>
    </div>
    ";
?>