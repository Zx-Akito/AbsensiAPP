<?php
    $active2="active-link";
    $template = "dashboard";
    $title = "Beranda";

    $tombol=$_POST['tombol'];
    $var01=$_POST['var01'];
    $var02=$_POST['var02'];
    if($tombol)
    {
        if($var01 AND $var02!="")
        {
            $tabel="kelas";
            $field="nama, jurusan";
            $value="'$var01','$var02'";
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
            <h4>Tambah Kelas</h4>
        </div>
    </section>
    <div class='container'>
        <div class='card shadow mb-4'>
            <div class='card-body'>
                <form action='' method='POST'  autocomplete='off'>
                    <div class='form-group row pl-2'>
                        <label class='col-sm-1 col-form-label'>Nama</label>
                        <div class='col-sm-5'>
                            <input type='text' class='form-control form-control-sm' name='var01'>
                        </div>
                    </div> 
                    <div class='form-group row pl-2'>
                        <label class='col-sm-1 col-form-label'>Jurusan</label>
                        <div class='col-sm-5'>
                            <select class='custom-select' name='var02'  id='pilih'>
                                <option selected>-- Pilih --</option>
                                <option value='Rekayasa Perangkat Lunak'>Rekayasa Perangkat Lunak</option>
                                <option value='Teknik Komputer Jaringan'>Teknik Komputer Jaringan</option>
                                <option value='Akuntansi Keuangan Lembaga'>Akuntansi Keuangan Lembaga</option>
                                <option value='Otomatisasi Tata Kelola Perkantoran I'>Otomatisasi Tata Kelola Perkantoran I</option>
                                <option value='Otomatisasi Tata Kelola Perkantoran II'>Otomatisasi Tata Kelola Perkantoran II</option>
                                <option value='Perhotelan I'>Perhotelan I</option>
                                <option value='Perhotelan II'>Perhotelan II</option>
                                <option value='Teknik Kendaraan Ringan Otomotif I'>Teknik Kendaraan Ringan Otomotif I</option>
                                <option value='Teknik Kendaraan Ringan Otomotif II'>Teknik Kendaraan Ringan Otomotif II</option>
                            </select>
                        </div>
                    </div>
                    <div class='mt-4'>
                        <input type='submit' class='btn btn-blue ml-2 text-white' name='tombol' value='tambah'></input>
                        <a href='?page=admin/kelas_list' class='btn btn-danger ml-2'>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
?>