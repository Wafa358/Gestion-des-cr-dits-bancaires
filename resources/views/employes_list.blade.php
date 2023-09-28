
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
              <li class="breadcrumb-item active"><a href="{{ ('credit') }}">Crédit</a></li>
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
              <div class="card-header">
                <h3 class="card-title">Formulaires</h3>
              </div>
              <!-- /.card-header -->
              <body>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Employés</h2>
                            @if (Session::has('success'))
                            <div class="alert alert-danger">{{ Session::get('success') }}</div>
                            @endif
                            <table class="table">
                                <thead>
                                    <th>#</th>
                                    <th>id</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Télephone</th>
                                    <th>Agence</th>
                                    <th>Adresse</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @php 
                                        $i=1;
                                  
                                    @endphp
                                    @foreach ($data as $employes)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $employes->id }}</td>
                                        <td>{{ $employes->prenom }}</td>
                                        <td>{{ $employes->nom }}</td>
                                        <td>{{ $employes->email }}</td>
                                        <td>{{ $employes->télephone }}</td>
                                        <td>{{ $employes->agence_func->nom }}</td>
                                        <td>{{ $employes->adresse }}</td>
                                        <td>
                                            <a href="{{url('edit-employes/'.$employes->id) }}">Edit</a> &nbsp;| &nbsp;
                                            <a href="{{ url('delete-employes/'.$employes->id) }}" class="btn btn-danger">Delete</a>
                                        </td>
            
                                    </tr>
                                    @endforeach 
                                </tbody>
            
            
            
            
                            </table> 
                           
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-outline-secondary"><a href="{{url('ajouter-employes')}}">Ajouter des employés</a></button>

                    
            
            
                
            </body>
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
