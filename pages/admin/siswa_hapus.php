<?php
	$id=$_GET['id'];
    $h=Hapus("siswa","username_siswa='$id'");
    $h1=Hapus("pengguna","username='$id'");
    if ($h and $h1) {
    	header("location:?page=admin/siswa_list&h=true");
    }
    else
    {
    	header("location:?page=admin/siswa_list&h=false");
    }
    
?>