<?php
session_start();
if(isset($_SESSION['login'])) {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Triwulan dua | Pondok Informatika</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../adminlte/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .gambar {
      border-radius: 15px;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pondok</b>IT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/bilal.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/bilal.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama']; ?> - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="home.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="user.php">
            <i class="fa fa-users"></i> <span>User</span>
          </a>
        </li>
        <li>
          <a href="Komentar.php">
            <i class="fa fa-twitch"></i> <span>Komentar</span>
          </a>
        </li>
        <li class="treeview" class="active">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="artikel.php"><i class="fa fa-circle-o"></i> Artikel</a></li>
            <li><a href="kategori.php"><i class="fa fa-circle-o"></i> Kategori</a></li>
          </ul>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Komentar
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
      <!--   <div class="box-header with-border">
          <h3 class="box-title">Data Santri</h3>
          <a href="user_tambah.php" class="btn btn-primary pull-right">Tambah Data</a>
        </div> -->
        <div class="box-body">
           <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>No Hp</th>
                  <th>Id Artikel</th>
                  <th>Komentar</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                   <?php
                      include 'proses/koneksi.php';

                      //======query menampilkan data dari tabel komentarsua====//
                      
                      $sql = mysqli_query($connect, "SELECT * FROM comment ORDER BY id DESC");
                      $no = 1;
                      while($row = mysqli_fetch_array($sql)) {
                        echo "
                        <tr>
                          <td>".$no++."</td>
                          <td>".$row['nama']."</td>
                          <td>".$row['email']."</td>
                          <td>".$row['no']."</td>
                          <td>".$row['idartikel']."</td>
                          <td>".$row['komentar']."</td>
                          <td>
                            <a class='btn btn-danger btn-xs ' href='proses/proses_hapus_komentar.php?ID=$row[id]'>
                              <i class='fa fa-trash-o'></i>
                              Hapus
                            </a>
                          </td>
                        </tr>
                        ";
                      }
                    ?>    
                </tfoot>
              </table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
      </div>

    </section>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

</div>
<script src="../adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../adminlte/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  
  $(document).on('click', '.delete', function() {
    if (confirm('Are sure to delete this data ?')) {
      return true;
    } else {
      return false;
    }
  })
    $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
<?php
} else {
  echo "Please <a href='index.php'>login</a> first.";
}
?>