<?php
    $active1="active-link";
    $template = "dashboard";
    $title = "Beranda";

    $a2=$_POST['a2'];
    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $tombol=$_POST['tombol'];
    //kelas
    $qkel=AmbilDataAll("kelas","");
    foreach ($qkel as $arkel) 
    {
      
      $listkel.="
          <option value='{$arkel['id_kelas']}'> {$arkel['nama']} | {$arkel['jurusan']}  </option>
      ";
      
    }
    
    if ($tombol)
    {
      if($var01!="" and $a2!="" and $var02!="")
      {
        $check_barcode=mysqli_query($koneksi, "SELECT username FROM pengguna where username='$var01'");
        if(mysqli_num_rows($check_barcode) > 0)
        {
          $alert=Toweweng($jenis="info",$peringatan="Data Gagal di Tambah",$keterangan="Ges aaya");
        }
        else
        {
          $tabel1="siswa";
          $field1="username,id_kelas,nama";
          $value1="'$var01','$a2','$var02'";
          $tabel2="pengguna";
          $field2="username";
          $value2="'$var01'";
          $alert=Tambah2($tabel1,$field1,$value1,$tabel2,$field2,$value2);
        }
      }
      else
      {
        $alert=Toweweng($jenis="info",$peringatan="Data Gagal di Tambah",$keterangan="Periksa Kembali Inputan");
      }
    }

    $konten ="
    <section class='container section' id='home'>
        <div class='container-fluid d-flex justify-content-between'>
            <h4>Tambah Siswa</h4>
        </div>
    </section>
    <div class='container'>
        <div class='card shadow mb-4'>
            <div class='card-body'>
            <form action='' method='POST'  autocomplete='off'>
            <div class='form-group row pl-2'>
              <label class='col-sm-1 col-form-label'>User</label>
              <div class='col-sm-5'>
                <input type='text' class='form-control form-control-sm' name='var01'>
              </div>
            </div>
            <div class='form-group row pl-2'>
              <label class='col-sm-1 col-form-label'>Nama</label>
              <div class='col-sm-5'>
                <input type='text' class='form-control form-control-sm' name='var02'>
              </div>
            </div>
            <div class='form-group row pl-2'>
                <label class='col-sm-1 col-form-label'>Kelas</label>
                <div class='col-sm-5'>
                  <select class='custom-select' name='a2'  id='pilih'>
                    <option selected>-- Pilih --</option>
                    $listkel
                  </select>
                </div>
              </div>
              <div class='mt-4'>
                <input type='submit' class='btn btn-blue ml-2 text-white' name='tombol' value='tambah'></input>
                <a href='?page=admin/siswa_list' class='btn btn-danger ml-2'>Kembali</a>
              </div>
          </form>
            </div>
        </div>
    </div>
    ";
?>