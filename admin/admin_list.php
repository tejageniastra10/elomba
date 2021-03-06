<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Transistor Cup</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css">
    .responstable {
  margin: 1em 0;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #024457;
  border-radius: 10px;
  border: 1px solid #167F92;
}
.responstable tr {
  border: 1px solid #D9E4E6;
  text-align: center;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
  text-align: center;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #167F92;
  color: #FFF;
  padding: 1em;
  text-align: center;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) span {
  display: none;
  text-align: center;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
  text-align: center;
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
    text-align: center;
  }
  .responstable th:nth-child(2):after {
    display: none;
    text-align: center;
  }
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
  text-align: center;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
  text-align: center;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
    text-align: center;
  }
}
.responstable th,
.responstable td {
  text-align: center;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th,
  .responstable td {
    display: table-cell;
    padding: 1em;
  }
}

body {
  padding: 0 2em;
  font-family: Arial, sans-serif;
  color: #024457;
  background: #f2f2f2;
}

h1 {
  font-family: Verdana;
  font-weight: normal;
  color: #024457;
}
h1 span {
  color: #167F92;
}
</style>

<body>
<?php
        require_once("../koneksi.php");
        $query = mysqli_query($konek, "SELECT * FROM user");
        $hasil = mysqli_fetch_array($query);
    ?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_dasboard.php">Admin Transistor Cup</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../index.php"><i class="fa fa-fw fa-user"></i> Homepage</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="admin_dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="admin_list.php"><i class="fa fa-fw fa-list"></i> Kegiatan</a>
                    </li>
                    <li class="active">
                        <a href="admin_list.php"><i class="fa fa-fw fa-list"></i> Tim</a>
                    </li>
                    <li>
                        <a href="admin_list.php"><i class="fa fa-fw fa-list"></i> Pembayaran</a>
                    </li>
                    <li>
                        <a href="admin_undian.php"><i class="fa fa-fw fa-table"></i> Undian</a>
                    </li>
                    <li>
                        <a href="admin_jadwal.php"><i class="fa fa-fw fa-calendar"></i> Jadwal</a>
                    </li>
                    <li>
                        <a href="admin_list.php"><i class="fa fa-fw fa-list"></i> Statistik</a>
                    </li>
                    <li>
                        <a href="admin_list.php"><i class="fa fa-fw fa-list"></i> Pengumuman</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List Tim
                            <small>Transistor Cup</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin_dashboard.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-list"></i> List Tim
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!--isi-->
<?php
    if(!isset($_GET['fail']))
    {
        echo""; 
    }
    else
    {?>
        <div class="alert alert-danger" role="alert"><b>Gagal Menambah tim. Hanya dapat mendaftarkan 16 tim.<b></div> 
<?php    }
    ?>


    <?php
        if(!isset($_GET["view"]))
        {?>
                <button type="button" class="btn btn-primary tambah-record pull-right" data-toggle="modal" data-target="#tambah"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Tim</button>
                <br><br>
                
                *Klik Nama tim untuk melihat anggota tim
                <!-- Table -->
                <table class="responstable">
                    <tr>
                    <th p align="center" ><b>NAMA TIM</b></th>
                    <th p align="center" ><b>ALAMAT</b></th>
                    <th p align="center" ><b>NO. TELEPON</b></th>
                    <th p align="center" ><b>ID TIM</b></th>
                    <th p align="center" ><b>USERNAME</b></th>
                    <th p align="center" ><b>PASSWORD</b></th>
                    <th p align="center" ><b>ACTION</b></th>
                    </tr>

                    <?php
                        $sql    = 'SELECT * FROM user,tim WHERE user.id = tim.id';
                        $result = mysqli_query($konek, $sql);
                        while($data = mysqli_fetch_array($result)){ 
                    ?>
                        <tr>
                            <td p align="center" ><b><a href="admin_list.php?view=<?=$data['id'];?>"><?php echo $data['namatim'];?></a><b></td>
                            <td p align="center" ><?php echo $data['alamat']; ?></td>
                            <td p align="center" ><?php echo $data['telp']; ?></td>
                            <td p align="center" ><?php echo $data['id']; ?> </td>
                            <td p align="center" ><?php echo $data['username']; ?></td>
                            <td p align="center" ><?php echo $data['password']; ?></td>
                            <td p align="center" >
                                <button type="button" class="btn btn-danger hapus-record" data-nama="<?=$data['namatim'];?>" data-id="<?=$data['id'];?>" aria-label="Left Align">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                    </table>
    <?php  }
            else
                {
                    $view=$_GET["view"];
                    $sql  = mysqli_query($konek, "SELECT namatim FROM tim WHERE id = '$view'");
                    $result = mysqli_fetch_array($sql);
                    ?>
                    <h1><?php echo $result['namatim']; ?></h1>
                    <table class="responstable">
                    <tr>
                        <th p align="center" ><b>NAMA</b></th>
                        <th p align="center" ><b>USIA</b></th>
                        <th p align="center" ><b>NO. KTP</b></th>
                        <th p align="center" ><b>FAKULTAS</b></th>
                    </tr>

                <?php
                    $sql  = "SELECT * FROM pemain WHERE idtim = '$view'";
                    $result = mysqli_query($konek, $sql);
                    while($data = mysqli_fetch_array($result)){ 
                ?>
                    <tr>
                        <td p align="center" ><b><?php echo $data['nama'];?></b></td>
                        <td p align="center" ><?php echo $data['usia']; ?></td>
                        <td p align="center" ><?php echo $data['noktp']; ?></td>
                        <td p align="center" ><?php echo $data['fakultas']; ?> </td>
                    </tr>
                <?php } ?>
                 </table>
              <?php  } ?>
  
            </div>

        </div>
            <!-- /.container-fluid -->


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
      <!-- Modal tambah -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Tim</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

<!-- Modal hapus -->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Tim</h4>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <!--AJAX tambah-->
    <script>
        $(function(){
            $(document).on('click','.tambah-record',function(e){
                $("#tambah").modal('show');
                $.post('admin_modaltambah.php',
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
    <!--AJAX hapus-->
    <script>
        $(function(){
            $(document).on('click','.hapus-record',function(e){
                $("#hapus").modal('show');
                $.post('admin_modalhapus.php',
                    { nama:$(this).attr('data-nama'),
                      id:$(this).attr('data-id')}, 
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>

</body>

</html>