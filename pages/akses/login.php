<?php

    $username=$_POST['username'];
    $password=$_POST['password'];

    if ($_POST['tombol']) {
		//Jika tombol Login di klik

		//Insert to db
		$cekdb = mysqli_query($koneksi,"SELECT * FROM pengguna where username='$username'");
		$hitung = mysqli_num_rows($cekdb);
		$pw = mysqli_fetch_array($cekdb); //Mengambil Data password yang ada di database
		$pwsekarang = $pw['password']; //Mengambil password yang diketik user

		if ($hitung>0) {
			//Jika ada
			//Memverifikasi password
			if (password_verify($password,$pwsekarang)) {
				//Jika passwordnya benar
				//Maka akan redirect ke halaman home
				$_SESSION['username'] = $username;
				echo '
				<script>
					alert("Login Berhasil");
					window.location.href="home.php";
				</script>
				';
			} else {
				//Jika passwordnya salah
				echo '
				<script>
					alert("Password Salah");
					window.location.href="index.php";
				</script>
				';
			}
		} else {
			//Jika username tidak terdaftar
			echo '
			<script>
				alert("User Tidak Ditemukan");
				window.location.href="index.php";
			</script>
			';
		}
	}

    $template = "login";
    $title = "Login";
    $konten = "
    <div class='content mt-5'>
        <div class='container'>
        <div class='row'>
            <div class='col-md-6 order-md-2'>
            <img src='assets/img/a.png' alt='Image' class='img-fluid mt-3'>
            </div>
            <div class='col-md-6 contents'>
            <div class='row justify-content-center'>
                <div class='col-md-8'>
                <div class='mb-4'>
                <h3>Hallo !</h3>
                <p class='mb-4'>Selamat Datang di Aplikasi Absensi !<br>Silahkan login terlebih dahulu untuk memasuki page selanjutnya.</p>
                </div>
                <form method='post' autocomplete='off'>
                <div class='form-group first'>
                    <label for='username'>Username</label>
                    <input type='text' class='form-control' name='username'>

                </div>
                <div class='form-group last mb-4'>
                    <label for='password'>Password</label>
                    <input type='password' class='form-control' name='password' id='inputPassword'>
                    
                </div>
                
                <div class='d-flex mb-5 align-items-center'>
                    <label class='control control--checkbox mb-0'><span class='caption'>Lihat Password</span>
                    <input type='checkbox' onclick='myFunction()'/>
                    <div class='control__indicator'></div>
                    </label>
                </div>

                <input type='submit' value='Masuk' name='tombol' class='btn text-white btn-block btn-blue'>
                
                </form>
                </div>
            </div>
            
            </div>
            
        </div>
        </div>
    </div>
    ";
?>