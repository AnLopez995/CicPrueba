<div class="container">
    <table id="tablaActivos" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th scope="col">Nombre Linea</th>
            <th scope="col">Longitud Linea</th>
            <th scope="col">Diametro Linea</th>
            <th scope="col">Fecha Instalacion</th>
        </tr>
        </thead>
        <body>
        @foreach ($activos as $activo)
            <tr>
                <td><input type="text" name="NombreLinea" id="NombreLinea" value="{{ $activo->NombreLinea }}"></td>
                <td>{{ $activo->LongitudLinea }}</td>
                <td>{{ $activo->DiametroLinea }}</td>
                <td>{{ $activo->FechaInstalacion }}</td>
            </tr>
        @endforeach
        </body>
    </table>
</div>
