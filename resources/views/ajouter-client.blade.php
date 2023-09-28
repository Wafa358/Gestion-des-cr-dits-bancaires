<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BTL | Credit</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    @include('layouts.navbar')
    @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Les données</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('agence') }}">Agence</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('agence') }}">Employés</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('client') }}">Client</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('credit') }}">Crédit</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <body>
            <div class="container" style="margin-top:20px">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ajouter Client</h2>
                        @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        <form method="post" action="{{url('save-client')}}">
                            @csrf 
                            <div class="md-3">
                                <label class="form-label">Nom</label>
                                <input type="text" class="form-control" name="nom"
                                placeholder="Entrer le nom" value="{{old('nom')}}">
                                @error('nom')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                            </div>
                                @enderror
                            <div class="md-3">
                                <label class="form-label">Télephone</label>
                                <input type="text" class="form-control" name="télephone"
                                placeholder="Entrer le numéro" value="{{old('télephone')}}">
                                @error('télephone')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                            </div>
                                @enderror
                            </div>
                            <div class="md-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="email"
                                placeholder="Entrer l'email" value="{{old('email')}}">
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                            </div>
                                @enderror
                            </div>
                            <div class="md-3">
                                <label class="form-label">Adresse</label>
                                <textarea class="form-control" name="adresse"
                                placeholder="Entrer l'adresse" value="{{old('adresse')}}"></textarea>
                                @error('adresse')
                                <div class="alert alert-danger" role="alert">
                                    {{$message}}
                            </div>
                                @enderror
                            </div><br>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                            <a href="{{url('client-list')}}" class="btn btn-danger">Retour</a>
                        </form>
                    </div>
                </div>
            </div>
    
        </body>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
      
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>
</body>
</html>
