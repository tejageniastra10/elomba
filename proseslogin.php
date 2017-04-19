
<?php session_start();
	require_once("koneksi.php");
	$username = $_POST['username'];
	$pass = $_POST['password'];

	if($username == 'admin' && $pass == 'admin')
	{
		header("location:admin/admin_dashboard.php");
	}
	else
	{
		$cekuser = mysqli_query($konek, "SELECT * FROM user, tim WHERE user.username = '$username' and user.id = tim.id");
		$jumlah = mysqli_num_rows($cekuser);
		$hasil = mysqli_fetch_array($cekuser);
		

		if($username == '' || $pass == '')
		{
					header("location:login1.php?failed=1");
		}
		else if($jumlah == 0) 
			{
				header("location:login1.php?failed=2");
			}
		else 
			{
				if($pass != $hasil['password'] || $username != $hasil['username']) 
					{
						echo 'Username atau Password salah !';
						header("location:login1.php?failed=3");
					}
			
				else 
					{
						$_SESSION['username'] = $hasil['username'];
						$_SESSION['idtim'] = $hasil['id'];
						header("location:index.php");
					}
			}
	}		
?>			
