<?php
if($_POST["ADD"]=="add")
{
	require_once("../koneksi.php");
	$result=mysqli_query($konek,"SELECT id FROM tim");
    $jum = mysqli_num_rows($result);

    if($jum < 16)
    {
		require_once("../koneksi.php");
		$namatim = $_POST["namatim"];
		$alamat = $_POST["alamat"];
		$telpon = $_POST["telpon"];
		$username = $_POST["username"];
		$password = $_POST["password"];

		$tmbh_sql = 'INSERT INTO tim (namatim, alamat, telp) VALUES ("'.$namatim.'", "'.$alamat.'", "'.$telpon.'")';
	    $tmbh_que = mysqli_query($konek, $tmbh_sql);

	    if($tmbh_que)
	    	{
	    		$sql = 'INSERT INTO user (username, password) VALUES ("'.$username.'", "'.$password.'")';
	    		$hasil = mysqli_query($konek, $sql);
	    		if($hasil)
	    		{
					header("location:admin_list.php");	
	    		}
	    	}
	}
	else if($jum==16)
	{
		header("location:admin_list.php?fail=1");
	}    
}
?>