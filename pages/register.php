<?php

    if ($_POST['tombol']) {
        //Jika tombol Kirim di klik
        $alert=Register($nama, $username, $password);
    }

    $template = "login";
    $title = "Register";
    $konten = "
    <div class='content mt-5'>
        <div class='container'>
        <div class='row'>
            <div class='col-md-6 order-md-2'>
            <img src='assets/img/b.gif' alt='Image' class='img-fluid'>
            </div>
            <div class='col-md-6 contents'>
            <div class='row justify-content-center'>
                <div class='col-md-8'>
                <div class='mb-4'>
                <h3>Sign Up to <strong>AnimeHub</strong></h3>
                <p class='mb-4'>Selamat Datang di AnimeHub!<br>Silahkan register terlebih dahulu untuk membuat akun pribadi kamu. ･ﾟ･(｡>ω<｡)･ﾟ･</p>
                </div>
                <form method='post' autocomplete='off'>
                    <div class='form-group last mb-4'>
                        <label for='password'>Nama</label>
                        <input type='text' class='form-control' name='nama' id='nama'>
                        
                    </div>
                    <div class='form-group first'>
                        <label for='username'>Username</label>
                        <input type='text' class='form-control' name='username' id='username'>

                    </div>
                    <div class='form-group last mb-4'>
                        <label for='password'>Password</label>
                        <input type='password' class='form-control' name='pass' id='password'>
                        
                    </div>

                    <input type='submit' value='Buat' name='tombol' class='btn text-white btn-block btn-primary'>

                    <span class='d-block text-left my-4 text-muted'>Sudah Punya Akun? <a href='?page=login'>Klik Disini</a></span>
                
                </form>
                </div>
            </div>
            
            </div>
            
        </div>
        </div>
    </div>
    ";
?>