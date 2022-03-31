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
          <option value='{$arkel['id_kelas']}'> {$arkel['nama']} </option>
      ";
        
    }
    
    if ($tombol)
    {
      if($var01!="" and $a2!="" and $var02!="")
      {
        $tabel="siswa";
        $field="nis,id_kelas,nama";
        $value="'$var01','$a2','$var02'";
        $alert=Tambah($tabel,$field,$value);
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
              <label class='col-sm-1 col-form-label'>Nis</label>
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