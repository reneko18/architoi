@extends('admin.includes.base')

@section('title','Projets')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projets</h1>
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
      <div class="row my-5">
        <div class="col-9">

        </div>
        <div class="col-3">
          <a class="btn btn-block bg-gradient-primary btn-lg" type="button" name="button"><i class="fas fa-plus"></i> Créer un nouveau projet</a>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom du projet</th>
                  <th>Professionnel</th>
                  <th>Ville du projet</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($projects as $p)
                  <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->professional->name }} {{ $p->professional->lastname }}</td>
                    <td>{{ $p->city }}</td>
                    <td>
                      <a href="{{ route("project.show",$p) }}"><i class="fa-solid fa-eye"></i></a>
                      <a href="{{ route("project.edit",$p) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                      <form class="" action="{{ route("project.destroy",$p) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="button"><i class="fa-solid fa-trash-can"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom du projet</th>
                  <th>Professionnel</th>
                  <th>Ville du projet</th>
                  <th>Action</th>
                </tr>
                </tfoot>
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

@endsection
@push('script-user')
  <script src="{{url('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{url('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
  <script src="{{url('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endpush
