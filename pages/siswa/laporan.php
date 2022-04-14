<?php
$lap=Siswa($_SESSION['username'])['username_siswa'];
$ambil=AmbilDataAll("lap","WHERE  username_siswa='$lap'");
foreach($ambil as $key)
{
    $no++;
    $data.="
    <tbody>
        <tr>
            <td>$no</td>
            <td>{$key['nama']}</td>
            <td>{$key['kelas']}</td>
            <td>{$key['jurusan']}</td>
            <td>{$key['absensi_masuk']}</td>
            <td>{$key['absensi_pulang']}</td>
        </tr>
    </tbody>
    ";
}

$active3="active-link";
$template="dashboard";
$title="Laporan";
$konten="

<section class='container section' id='home'>
<div class='container-fluid d-flex justify-content-between'>
    <h4>Data Laporan</h4>
</div>
</section>
<div class='container'>
<div class='card shadow mb-4'>
    <div class='card-header py-3'>
        <h6 class='m-0 font-weight-bold text-primary'>Laporan</h6>
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
                    <th>Absen Masuk</th>
                    <th>Absen Keluar</th>
                </tr>
            </thead>
            $data
            </table>
        </div>
    </div>
</div>
</div>

";

?>