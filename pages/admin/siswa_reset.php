<?php
    $active1="active-link";
    $template = "dashboard";
    $title = "Beranda";
    $id=$_GET['id'];
    $tombol=$_POST['tombol'];

    $tampil=mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$id'");
    $cek=mysqli_fetch_assoc($tampil);
    $a1=$cek['nis'];
    $a2=$cek['nama'];
    $a3=$cek['password'];   

    if ($tombol)
    {
      $acak=rand(1000,9999);
      $alert=ResetSiswa($acak,$id);
    }

    $konten ="
    <section class='container section' id='home'>
        <div class='container-fluid d-flex justify-content-between'>
            <h4>Reset Siswa</h4>
        </div>
    </section>
    <div class='container'>
        <div class='card shadow mb-4'>
            <div class='card-body'>
            <form action='' method='POST'  autocomplete='off'>
            <div class='form-group row pl-2'>
              <label class='col-sm-1 col-form-label-sm'>Nis</label>
              <div class='col-sm-5'>
                <input type='text' class='form-control form-control-sm' name='var01' value='$a1'>
              </div>
            </div>
            <div class='form-group row pl-2'>
              <label class='col-sm-1 col-form-label-sm'>Nama</label>
              <div class='col-sm-5'>
                <input type='text' class='form-control form-control-sm' name='var02' value='$a2'>
              </div>
            </div>
            <div class='form-group row pl-2'>
              <label class='col-sm-1 col-form-label-sm'>Password</label>
              <div class='col-sm-5'>
                <input type='text' class='form-control form-control-sm' name='var02' value='$acak' readonly>
              </div>
            </div>
            <div class='mt-4'>
                <input type='submit' class='btn btn-warning ml-2 text-white' name='tombol' value='Reset'></input>
                <a href='?page=admin/siswa_list' class='btn btn-danger ml-2'>Kembali</a>
            </div>
          </form>
            </div>
        </div>
    </div>
    ";
?>