<?php

require 'functions.php';

session_start();
if(!isset($_SESSION["login"])){
    header('location:../login/login.php'); exit;}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aku Sampah | Main Data</title>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <style>
      
td, th {
  border: 1px solid #ddd;
  padding-right: 8px;
  padding-left: 8px;
}

tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}

th {
  padding-bottom: 5px;
  padding-top: 5px;
  text-align: left;
  background-color: rgba(64, 64, 64, 0.8);
  color: white;
}
    </style>
</head>
<body>
<div class="wrapper">

    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data OSKA</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                <table id="tabel-data-two">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th>detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $datas = query("select * from proker");
                        $i=1;
                        foreach($datas as $data)
                        {
                            echo "<tr>
                            <td>".$i."</td>
                            <td>".$data['image']."</td>
                            <td>".$data['id']."</td>
                            <td>".$data['name']."</td>
                            <td>".$data['redirect']."</td>
                            <td>".$data['detail']."</td>".
                            '<td>'.'<a href="privilege/sherc.php?who='.$data['id'].'">'.'Change </a>'.'|'.
                                  '<a href="privilege/sherd.php?who='.$data['id'].'">'.' Delete</a></td>'.
                            "</tr>";
                            $i++;
                        }
                    ?>
                    </tbody>
                    
                    <script>
                    $(document).ready(function(){
                        $('#tabel-data-two').DataTable();
                    });
                </script>

                </table>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Divisi</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

              <table id="tabel-data-three">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $datas = query("select * from divisi");
                        $i=1;
                        foreach($datas as $data)
                        {
                            echo "<tr>
                            <td>".$i."</td>
                            <td>".$data['image']."</td>
                            <td>".$data['id']."</td>
                            <td>".$data['name']."</td>
                            <td>".$data['shortdesc']."</td>".
                            '<td>'.'<a href="privilege/sherc.php?who='.$data['id'].'">'.'Change </a>'.'|'.
                                  '<a href="privilege/sherd.php?who='.$data['id'].'">'.' Delete</a></td>'.
                            "</tr>";
                            $i++;
                        }
                    ?>
                    </tbody>
                    
                    <script>
                    $(document).ready(function(){
                        $('#tabel-data-three').DataTable();
                    });
                </script>

                </table>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


                <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Trash Man</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

              <table id="tabel-data-five">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Tag</th>
                            <th>Author</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $datas = query("select * from artikel");
                        $i=1;
                        foreach($datas as $data)
                        {
                            echo "<tr>
                            <td>".$i."</td>
                            <td>".$data['image']."</td>
                            <td>".$data['id']."</td>
                            <td>".$data['title']."</td>
                            <td>".$data['tag']."</td>
                            <td>".$data['author']."</td>
                            <td>".$data['link']."</td>".
                            '<td>'.'<a href="privilege/sherc.php?who='.$data['id'].'">'.'Change </a>'.'|'.
                                  '<a href="privilege/sherd.php?who='.$data['id'].'">'.' Delete</a></td>'.
                            "</tr>";
                            $i++;
                        }
                    ?>
                    </tbody>
                    
                    <script>
                    $(document).ready(function(){
                        $('#tabel-data-five').DataTable();
                    });
                </script>

                </table>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

                                <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>TrashSaction</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">

                <table id="tabel-data-six">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Divisi</th>
                            <th>Tanggal Lahir</th>
                            <th>Short Words</th>
                            <th>Masa Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $datas = query("select * from anggota");
                        $i=1;
                        foreach($datas as $data)
                        {
                            echo "<tr>
                            <td>".$i."</td>
                            <td>".$data['image']."</td>
                            <td>".$data['id']."</td>
                            <td>".$data['name']."</td>
                            <td>".$data['divisi']."</td>
                            <td>".$data['dob']."</td>
                            <td>".$data['words']."</td>
                            <td>".$data['akhirjabatan']."</td>".
                            '<td>'.'<a href="privilege/sherc.php?who='.$data['id'].'">'.'Change </a>'.'|'.
                                  '<a href="privilege/sherd.php?who='.$data['id'].'">'.' Delete</a></td>'.
                            "</tr>";
                            $i++;
                        }
                    ?>
                    </tbody>
                    
                    <script>
                    $(document).ready(function(){
                        $('#tabel-data-six').DataTable();
                    });
                </script>

                </table>

                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->





  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

</body>
</html>