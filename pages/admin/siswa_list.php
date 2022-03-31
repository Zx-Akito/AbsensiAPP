<?php
    $ambil=AmbilDataAll("list_siswa","");
    foreach($ambil as $key)
    {
        $no++;
        $data.="
            </thead>
                <tr>
                    <td>$no</td>
                    <td>{$key['nama_siswa']}</td>
                    <td>{$key['nama_kelas']}</td>
                    <td>{$key['jurusan']}</td>
                    <td>
                        <a href='?page=admin/siswa_edit&id={$key['nis']}' class='d-none d-inline-block btn btn-primary'><i class='fas fa-edit text-white'></i></a>
                        <a href='?page=admin/siswa_reset&id={$key['nis']}' class='d-none d-inline-block btn btn-warning'><i class='fas fa-lock text-white'></i></a>
                        <a href='?page=admin/siswa_hapus' class='d-none d-inline-block btn btn-danger'><i class='fas fa-times text-white'></i></a>
                    </td>
                </tr>
            </table>
        ";
    }
    $active1="active-link";
    $template = "dashboard";
    $title = "Beranda";
    $konten = "

    <section class='container section' id='home'>
        <div class='container-fluid d-flex justify-content-between'>
            <h4>Daftar Siswa</h4>
            <a href='?page=admin/siswa_tambah' class='d-none d-inline-block btn btn-sm btn-primary shadow-sm'><i class='fas fa-plus fa-2x text-white'></i></a>
        </div>
    </section>
    <div class='container'>
        <div class='card shadow mb-4'>
            <div class='card-header py-3'>
                <h6 class='m-0 font-weight-bold text-primary'>Siswa</h6>
            </div>
            <div class='card-body'>
                <div class='table-responsive'>
                    <table class='table table-bordered text-center' id='datatable' width='100%' cellspacing='0'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    $data
                </div>
            </div>
        </div>
    </div>
        
    ";
?>