<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Daarul Qolam</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/backend/AdminLTE-master/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="/backend/AdminLTE-master/#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="/backend/AdminLTE-master/#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/backend/AdminLTE-master/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="/backend/AdminLTE-master/#" class="dropdown-item">
            </a>
            <div class="dropdown-divider"></div>
            <a href="/backend/AdminLTE-master/#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="/backend/AdminLTE-master/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="/backend/AdminLTE-master/#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/backend/AdminLTE-master/index3.html" class="brand-link">
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
            <a href="/backend/AdminLTE-master/#" class="d-block">Halaman Admin</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="/backend/AdminLTE-master/#" class="nav-link active">
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
                  <a href="/admin/fasilitas" class="nav-link">
                    <p>Fasilitas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/galeri" class="nav-link">
                    <p>Galeri</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/admin/ekstrakurikuler" class="nav-link active">
                    <p>Ekstrakurikuler</p>
                  </a>
                </li>
                </ul>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="/backend/AdminLTE-master/#" class="nav-link active">
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
              <h1 class="m-0 text-dark">Ekstrakurikuler</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Ekstrakurikuler Daarul Qolam</h5><br>
            <center>
                <p></p>
                <a href="{{ route('artikel.create') }}"
                class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                </a>
            </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama Ekstrakurikuler</th>
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

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/backend/AdminLTE-master/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="/backend/AdminLTE-master/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <!-- Bootstrap 4 -->
  <script src="/backend/AdminLTE-master/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="/backend/AdminLTE-master/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="/backend/AdminLTE-master/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="/backend/AdminLTE-master/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="/backend/AdminLTE-master/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="/backend/AdminLTE-master/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="/backend/AdminLTE-master/plugins/moment/moment.min.js"></script>
  <script src="/backend/AdminLTE-master/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="/backend/AdminLTE-master/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="/backend/AdminLTE-master/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="/backend/AdminLTE-master/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/backend/AdminLTE-master/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="/backend/AdminLTE-master/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/backend/AdminLTE-master/dist/js/demo.js"></script>
</body>

</html>
