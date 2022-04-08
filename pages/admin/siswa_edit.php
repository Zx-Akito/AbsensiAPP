<?php
    $active1="active-link";
    $template = "dashboard";
    $title = "Beranda";

    $a2=$_POST['a2'];
    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $tombol=$_POST['tombol'];
    $tabel="siswa";
    $id=$_GET['id'];
    $id1=$_GET['id1'];
    $kunci="username_siswa='$id'";
    // cek siswa
    $cek_siswa=AmbilData($tabel, $kunci);

    //kelas
    $qkel=AmbilDataAll("kelas","where id_kelas='$id1'");
    foreach ($qkel as $arkel) 
    {
      if ($a2==$arkel['id_kelas']) {
        $listkel.="
            <option value='{$arkel['id_kelas']}' selected> {$arkel['nama']} | {$arkel['jurusan']}  </option>
        ";
      } 
      else
      {
        $listkel.="
            <option value='{$arkel['id_kelas']}'> {$arkel['nama']} | {$arkel['jurusan']}  </option>
        ";
      }
        
    }
    
    
    if ($tombol)
    {
      if($var01!="" and $a2!="" and $var02!="")
      {
        $field = "
        username_siswa='$var01',
        id_kelas='$a2',
        nama='$var02'
        ";
        $alert=Edit($tabel, $field, $kunci);
      }
      else
      {
        $alert=Toweweng($jenis="info",$peringatan="Data Gagal di Tambah",$keterangan="Periksa Kembali Inputan");
      }
    }

    $konten ="
    <section class='container section' id='home'>
        <div class='container-fluid d-flex justify-content-between'>
            <h4>Edit Siswa</h4>
        </div>
    </section>
    <div class='container'>
        <div class='card shadow mb-4'>
            <div class='card-body'>
            <form action='' method='POST'  autocomplete='off'>
            <div class='form-group row pl-2'>
              <label class='col-sm-1 col-form-label'>Nis</label>
              <div class='col-sm-5'>
                <input type='text' class='form-control form-control-sm' name='var01' value='$cek_siswa[username_siswa]'>
              </div>
            </div>
            <div class='form-group row pl-2'>
              <label class='col-sm-1 col-form-label'>Nama</label>
              <div class='col-sm-5'>
                <input type='text' class='form-control form-control-sm' name='var02' value='$cek_siswa[nama]'>
              </div>
            </div>
            <div class='form-group row pl-2'>
                <label class='col-sm-1 col-form-label'>Kelas</label>
                <div class='col-sm-5'>
                  <select class='custom-select' name='a2' value='$a2' id='pilih'>
                    <option>-- Pilih --</option>
                    $listkel

                  </select>
                </div>
              </div>
              <div class='mt-4'>
                <input type='submit' class='btn btn-blue ml-2 text-white' name='tombol' value='Update'></input>
                <a href='?page=admin/siswa_list' class='btn btn-danger ml-2'>Kembali</a>
              </div>
          </form>
            </div>
        </div>
    </div>
    ";
?>