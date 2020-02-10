<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Admin | Daarul Qolam</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="/backend/AdminLTE-master/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="/backend/AdminLTE-master/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Daarul Qolam</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="/backend/AdminLTE-master/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Halaman Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <p>
                  Home
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/materipendidikan" class="nav-link">
                    <p>Materi Pendidikan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/fasilitas" class="nav-link active">
                    <p>Fasilitas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/galeri" class="nav-link">
                    <p>Galeri</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/ekstrakurikuler" class="nav-link">
                    <p>Ekstrakurikuler</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="#" class="nav-link active">
                <p>
                  Forms
                  <i class="right fas fa-angle-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/admin/pendaftaran" class="nav-link">
                    <p>Pendaftaran</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Fasilitas</h1>
            </div><!-- /.col -->
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Fasilitas Daarul Qolam</h5><br>
            <center>
                <p></p>
                <a href="{{ route('fasilitas.create') }}"
                class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                </a>
            </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Fasilitas</th>
                        <th>Penjelasan</th>
                        <th style="text-align: center;">Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                @foreach ($artikel as $data)
                    <tr>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->slug}}</td>
                        <td>
                @foreach ($data->tag as $tag)
                    {{ $tag->nama_tag }}
                @endforeach</td>
                    <td>{{$data->kategori->nama_kategori}}</td>
                    <td>{{$data->user->name}}</td>
                    <td><img src="{{asset('assets/img/artikel/' .$data->foto. '')}}"
                        style="width:50px; height:50px;" alt="Foto"></td>
                    <td style="text-align: center;">
                <form action="{{route('artikel.destroy', $data->id)}}" method="post">
                    {{csrf_field()}}
                <a href="{{route('artikel.edit', $data->id)}}"
                    class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                </a>
                <a href="{{route('artikel.show', $data->id)}}"
                    class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
                </a>
                    <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->

    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="/backend/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/backend/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/backend/AdminLTE-master/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/backend/AdminLTE-master/dist/js/adminlte.js"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="/backend/AdminLTE-master/dist/js/demo.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="/backend/AdminLTE-master/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="/backend/AdminLTE-master/plugins/raphael/raphael.min.js"></script>
    <script src="/backend/AdminLTE-master/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="/backend/AdminLTE-master/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="/backend/AdminLTE-master/plugins/chart.js/Chart.min.js"></script>

    <!-- PAGE SCRIPTS -->
    <script src="/backend/AdminLTE-master/dist/js/pages/dashboard2.js"></script>
</body>

</html>
