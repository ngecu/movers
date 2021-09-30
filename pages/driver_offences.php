<?php include('../server.php') ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Movers Ltd</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.css">

</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include '../components/topbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../index3.html" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Movers Ltd</span>
    </a>

    <!-- Sidebar -->
    <?php include '../components/sidebar.php'; ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Offence Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            
              <li class="breadcrumb-item active">Drivers</li>
            </ol>
          </div>
        </div>

    </section>

    <section>
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Add Offence</h3>

            </div>
            <div class="card-body">
            <form action="driver_offences.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Summary</label>
      <input type="text" class="form-control" id="inputEmail4" name="offenceSummary">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Driver</label>
      <select id="club" class="form-control" name="driver_pk">
          <option value = ""></option>
        <?php
        $result = mysqli_query($db,"select * from driver"); // fetch data from database

          while($row = mysqli_fetch_array($result)) {
            echo '<option value='.$row['driver_pk'].'>'.$row['name'].'</option>';
          }
        ?> 
        </select>    </div>
  </div>
 
  <button type="submit" class="btn btn-primary" name="reg_offence">Add In</button>
</form>
            </div>
        </div>
    <div class="card">
            <div class="card-header">
              <h3 class="card-title">Offence List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Summary</th>
                  <th>Driver</th>
                  <th>Offence Date</th>
                  <th>Driver Stats</th>         
                </tr>
                </thead>
                <tbody>

                <?php


$records = mysqli_query($db,"select * from offence INNER JOIN driver AS driver ON driver.driver_pk = offence.driver_pk "); // fetch data from database


$sql = "SELECT * FROM object INNER JOIN formulation ON object.formulation_fk = formulation.id";
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['summary']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['reg_time']; ?></td>
    <td><?php echo $data['status']; ?></td>
  </tr>	
<?php
}
?>
              
                
                </tbody>
                <tfoot>
                <tr>
                  <th>Summary</th>
                  <th>Driver</th>
                  <th>Offence Date</th>
                  <th>Driver Stats</th>         
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <a href="https://devngecu.herokuapp.com/">Dev Ngecu</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<script src="../plugins/datatables/jquery.dataTables.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>


<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>


<script>
  var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

timer();

function timer(){
 var currentTime = new Date()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
var sec = currentTime.getSeconds()
if (minutes < 10){
    minutes = "0" + minutes
}
if (sec < 10){
    sec = "0" + sec
}
var t_str = hours + ":" + minutes + ":" + sec + " ";
if(hours > 11){
    t_str += "PM";
} else {
   t_str += "AM";
}
 document.getElementById('time_span').innerHTML = t_str;
 setTimeout(timer,1000);
}
</script>
</body>
</html>
