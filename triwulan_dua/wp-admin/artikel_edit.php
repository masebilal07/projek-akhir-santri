<?php
session_start();
if(isset($_SESSION['login'])) {

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project One | Pondok Informatika</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../adminlte/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
      <span class="logo-lg"><b>Admin</b>LTE</span>
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
                <img src="adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['nama']; ?> - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
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
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
        Halaman Edit Artikel 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Artikel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="proses/proses_edit_artikel.php" method="post" class="form-horizontal">
            <?php 
            include 'proses/koneksi.php';
            $id = $_GET['ID'];
              $sql = mysqli_query($connect, "SELECT * FROM article WHERE id = $id");
              $Halaman = mysqli_fetch_array($sql);
            ?>
            <input type="hidden" name="id" value="<?= $id ?>">
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" value="<?= $Halaman['judul']?>" class="form-control" placeholder="judul">
                  </div>
                </div>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Kategori</label>
                  <div class="col-sm-10">
                    <select name="kategori" class="form-control">
                      <option value="0">-Silahkan Pilih-</option>
                      <?php
                      $sql = mysqli_query($connect, "SELECT * FROM category ORDER BY id DESC");
                      while($row = mysqli_fetch_array($sql)) {
                        if ($row['id'] == $Halaman['kategori_id']) {
                          echo "<option value='$row[id]' selected>".$row['nama']."</option>";
                        } else {
                          echo "<option value='$row[id]'>".$row['nama']."</option>";
                        }   
                      }
                      ?>
                    </select> 
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Isi</label>
                  <div class="col-sm-10">
                    <textarea id="editor" name="isi" class="form-control" placeholder="isi"><?= $Halaman['isi']?>
                    </textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-10">
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" value="1" <?= ($Halaman['status'] == 0) ? 'checked' : ''?>>
                        Aktif
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" value="0" <?= ($Halaman['status'] == 0) ? 'checked' : ''?>>
                        Tidak Aktif
                      </label>
                    </div>
                  </div>
                </div>
              <!-- </div> -->
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="santri.php" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<!-- SlimScroll -->
<script src="../adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../adminlte/dist/js/demo.js"></script>
<script src="../adminlte/bower_components/ckeditor/ckeditor.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  $('.tanggal').datepicker({
    autoclose: true,
    format: "yyyy-mm-dd"
  })
    CKEDITOR.replace('editor');
    // tinymce.init({ selector:'textarea' });
</script>
</body>
</html>
<?php
} else {
  echo "Please <a href='index.php'>login</a> first.";
}
?>