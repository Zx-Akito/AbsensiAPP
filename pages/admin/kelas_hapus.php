<?php
    $id=$_GET['id'];
    $h=Hapus("kelas","id_kelas='$id'");
    if ($h) {
        header("location:?page=admin/kelas_list&h=true");
    }
    else
    {
        header("location:?page=admin/kelas_list&h=false");
    }
?>