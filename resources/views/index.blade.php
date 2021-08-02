<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ACTIVOS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
        <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="container">
            <table id="tablaActivos" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">Nombre Linea</th>
                    <th scope="col">Longitud Linea</th>
                    <th scope="col">Diametro Linea</th>
                    <th scope="col">Fecha Instalacion</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <body>
                    @foreach ($activos as $activo)
                    <tr>
                        <td>{{ $activo->NombreLinea }}</td>
                        <td>{{ $activo->LongitudLinea }}</td>
                        <td>{{ $activo->DiametroLinea }}</td>
                        <td>{{ $activo->FechaInstalacion }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('activos.show',  $activo->id) }}">ver</a>
                            <a class="btn btn-info" href="{{route('activos.edit',$activo->id)}}">Editar</a>
                        </td>
                    </tr>
                    @endforeach
                </body>
              </table>
          </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js" ></script>

<script>
    $(document).ready(function() {
        $('#tablaActivos').DataTable();

} );
</script>
</html>
