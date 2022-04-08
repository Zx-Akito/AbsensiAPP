<?php
    $active2="active-link";
    $template = "dashboard";
    $title = "Beranda";
    $id=$_GET['id'];
    $tabel="kelas";
    $kunci="id_kelas='$id'";
    $tombol=$_POST['tombol'];
    $var01=$_POST['var01'];
    $var02=$_POST['var02'];

    if($tombol)
    {
        if($var01 AND $var02!="")
        {
            $field="
            nama='$var01',
            jurusan='$var02'
            ";
            $alert=Edit($tabel,$field,$kunci);
        }
    }

    $cek=AmbilData($tabel,$kunci);;
    $cek['jurusan'];
    switch ($cek['jurusan']) {
        case 'Rekayasa Perangkat Lunak':
            $pilih1="selected";
        break;
        case 'Teknik Komputer Jaringan':
            $pilih2="selected";
        break;
        case 'Akuntansi Keuangan Lembaga':
            $pilih3="selected";
        break;
        case 'Otomatisasi Tata Kelola Perkantoran I':
            $pilih4="selected";
        break;
        case 'Otomatisasi Tata Kelola Perkantoran II':
            $pilih5="selected";
        break;
        case 'Perhotelan I':
            $pilih6="selected";
        break;
        case 'Perhotelan II':
            $pilih7="selected";
        break;
        case 'Teknik Kendaraan Ringan Otomotif I':
            $pilih8="selected";
        break;
        case 'Teknik Kendaraan Ringan Otomotif II':
            $pilih9="selected";
        break;
    }

    $konten ="
    <section class='container section' id='home'>
        <div class='container-fluid d-flex justify-content-between'>
            <h4>Edit Kelas</h4>
        </div>
    </section>
    <div class='container'>
        <div class='card shadow mb-4'>
            <div class='card-body'>
                <form action='' method='POST'  autocomplete='off'>
                    <div class='form-group row pl-2'>
                        <label class='col-sm-1 col-form-label'>Nama</label>
                        <div class='col-sm-5'>
                            <input type='text' class='form-control form-control-sm' name='var01'  value='$cek[nama]'>
                        </div>
                    </div> 
                    <div class='form-group row pl-2'>
                        <label class='col-sm-1 col-form-label'>Jurusan</label>
                        <div class='col-sm-5'>
                            <select class='custom-select' name='var02'  id='pilih'>
                                <option value='Rekayasa Perangkat Lunak' $pilih1>Rekayasa Perangkat Lunak</option>
                                <option value='Teknik Komputer Jaringan' $pilih2>Teknik Komputer Jaringan</option>
                                <option value='Akuntansi Keuangan Lembaga' $pilih3>Akuntansi Keuangan Lembaga</option>
                                <option value='Otomatisasi Tata Kelola Perkantoran I' $pilih4>Otomatisasi Tata Kelola Perkantoran I</option>
                                <option value='Otomatisasi Tata Kelola Perkantoran II' $pilih5>Otomatisasi Tata Kelola Perkantoran II</option>
                                <option value='Perhotelan I' $pilih6>Perhotelan I</option>
                                <option value='Perhotelan II' $pilih7>Perhotelan II</option>
                                <option value='Teknik Kendaraan Ringan Otomotif I' $pilih8>Teknik Kendaraan Ringan Otomotif I</option>
                                <option value='Teknik Kendaraan Ringan Otomotif II' $pilih9>Teknik Kendaraan Ringan Otomotif II</option>
                            </select>
                        </div>
                    </div>
                    <div class='mt-4'>
                        <input type='submit' class='btn btn-success ml-2 text-white' name='tombol' value='Update'></input>
                        <a href='?page=admin/kelas_list' class='btn btn-danger ml-2'>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
?>