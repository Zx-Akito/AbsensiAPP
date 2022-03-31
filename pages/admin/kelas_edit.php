<?php
    $active2="active-link";
    $template = "dashboard";
    $title = "Beranda";
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
                            <input type='text' class='form-control form-control-sm' name='var01'>
                        </div>
                    </div> 
                    <div class='form-group row pl-2'>
                            <label class='col-sm-1 col-form-label'>Jurusan</label>
                        <div class='col-sm-5'>
                            <select class='custom-select' name='pilih'  id='pilih'>
                                <option selected>-- Pilih --</option>
                                <option value='1'>Pemilik</option>
                                <option value='2'>Gudang</option>
                                <option value='3'>Kasir</option>
                            </select>
                        </div>
                    </div>
                    <div class='mt-4'>
                        <input type='submit' class='btn btn-success ml-2 text-white' name='tombol' value='Update'></input>
                        <a href='?page=admin/siswa_list' class='btn btn-danger ml-2'>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
?>