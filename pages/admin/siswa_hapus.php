<?php
	$id=$_GET['id'];
    $h=Hapus("siswa","nis='$id'");
    if ($h) {
    	header("location:?page=admin/siswa_list&h=true");
    }
    else
    {
    	header("location:?page=admin/siswa_list&h=false");
    }
    
?>