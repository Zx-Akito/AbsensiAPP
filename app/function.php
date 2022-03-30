<?php

    // LOGIN
    //Insert to db
    function Login($username, $password)
    {

        global $koneksi;

        $cekdb = mysqli_query($koneksi,"SELECT * FROM pengguna where username='$username'");
        $hitung = mysqli_num_rows($cekdb);
        $pw = mysqli_fetch_array($cekdb); //Mengambil Data password yang ada di database Pengguna
        $pwsekarang = $pw['password']; //Mengambil password yang diketik user

        $cek1 = mysqli_query($koneksi,"SELECT * FROM siswa where nis='$username'");
        $hitung1 = mysqli_num_rows($cek1);
        $pw1 = mysqli_fetch_array($cek1); //Mengambil Data password yang ada di database Siswa
        $pwsekarang1 = $pw1['password']; //Mengambil password yang diketik user

        if ($hitung>0)
        {
            //Jika ada
            //Memverifikasi password
            if (password_verify($password,$pwsekarang))
            {
                //Jika passwordnya benar
                //Maka akan redirect ke halaman home
                $_SESSION['username'] = $username;
                $_SESSION['JenisLog']="administrator";
                header("location:index.php?page=beranda&p=true"); 
            }
            else {
                //Jika passwordnya salah
                echo '
                <script>
                    alert("Password Salah");
                    window.location.href="index.php";
                </script>
                ';
            }
        }
        elseif ($hitung1>0) 
        {
            if(password_verify($password,$pwsekarang1))
            {
                // jika password dan user benar
                $_SESSION['username'] = $username;
                $_SESSION['JenisLog']="user";
                header("location:index.php?page=beranda&p=true");
            }
            else 
            {
                //Jika passwordnya salah
                echo '
                <script>
                    alert("Password Salah");
                    window.location.href="index.php";
                </script>
                ';
            }
        } 
        else 
        {
            //Jika username tidak terdaftar
            echo '
            <script>
                alert("User Tidak Ditemukan");
                window.location.href="index.php";
            </script>
            ';
        }
    }

    function Pengguna($kunci)
    {
        global $koneksi;

        $Query=mysqli_query($koneksi,"SELECT * FROM pengguna WHERE id_pengguna='$kunci'");
        return mysqli_fetch_assoc($Query);
    
    }

    function Alert($jenis="",$keterangan="")
    {
        return "
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                
                Toast.fire({
                    icon: '$jenis',
                    title: '$keterangan'
                })
            </script>
        ";
    }
    
?>