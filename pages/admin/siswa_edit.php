<?php
    $active1="active-link";
    $template = "dashboard";
    $title = "Beranda";

    $a2=$_POST['a2'];
    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    $tombol=$_POST['tombol'];
    $tabel="siswa";
    $kunci="username_siswa='{$_GET['id']}'";
    // cek siswa
    $cek_siswa=AmbilData($tabel, $kunci);

    //kelas
    // $qkel=AmbilDataAll("kelas","");
    // foreach ($qkel as $arkel) 
    // {
    //    if ($a2==$arkel['id_kelas']) {
    //      $listkel.="
    //          <option value='{$arkel['id_kelas']}' selected> {$arkel['nama']} | {$arkel['jurusan']}  </option>
    //      ";
    //    } else {
    //      $listkel.="
    //          <option value='{$arkel['id_kelas']}'> {$arkel['nama']} | {$arkel['jurusan']}  </option>
    //      ";
    //    }
       
        
    // }
    switch ($cek_siswa['id_kelas']) {
      case "1":
        $pilih1="selected";
        break;
      case "2":
        $pilih2="selected";
        break;
      case "3":
        $pilih3="selected";
        break;
      case "4":
        $pilih4="selected";
        break;
      case "5":
        $pilih5="selected";
        break;
      case "6":
        $pilih6="selected";
        break;
      case "7":
        $pilih7="selected";
        break;
      case "8":
        $pilih8="selected";
        break;
      case "9":
        $pilih9="selected";
        break;
    
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
                  <select class='custom-select' name='a2' value='$cek_siswa[id_kelas]'  id='pilih'>
                    <option>-- Pilih --</option>
                    <option value='1' $pilih1>Rekayasa Perangkat Lunak</option>
                    <option value='2' $pilih2>Teknik Komputer Jaringan</option>
                    <option value='3' $pilih3>Akuntansi Keuangan Lembaga</option>
                    <option value='4' $pilih4>Perhotelan I</option>
                    <option value='5' $pilih5>Perhotelan II</option>
                    <option value='6' $pilih6>Teknik Kendaraan Ringan Otomotif I</option>
                    <option value='7' $pilih7>Teknik Kendaraan Ringan Otomotif II</option>
                    <option value='8' $pilih8>Otomatisasi Tata Kelola Perkantoran I</option>
                    <option value='9' $pilih9>Otomatisasi Tata Kelola Perkantoran II</option>

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