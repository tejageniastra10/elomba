<?php
if($_POST['HAPUS']=='hapus')
	require_once("../koneksi.php");
	$id = $_POST["id"];
	
	if($id != "")
	{  // Jika Request ID tidak = kosong maka lakukan proses
    	$hpus_sql = "DELETE FROM tim WHERE id ='".$id."'"; // SQL untuk hapus data berdasarkan ID
    	$hpus_que = mysqli_query($konek, $hpus_sql);
    	if($hpus_que)
    	{
    		$sql = "DELETE FROM user WHERE id ='".$id."'"; // SQL untuk hapus data berdasarkan ID
    		$hasil = mysqli_query($konek, $sql);
    		if($hasil)
    		{
        		header("location:admin_list.php");    // Tampilkan Pesan
    		}
    	}
	}
?>