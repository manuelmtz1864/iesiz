<!DOCTYPE html>
<html>
<head>
    <title>Certificado</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <img src="{{ asset('img/LOGOIESIZv1.png') }}" alt="Logo de la Escuela" class="img-fluid mt-3" style="width: 200px; height: 100px;">
            <h1 class="mt-3 text-primary">IESIZ</h1>
        </div>

        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="bg-primary text-white">Clave de la Escuela</th>
                            <td>{{ $certificate->ClaveEscuela }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Turno</th>
                            <td>{{ $certificate->Turno }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Plan de Estudios</th>
                            <td>{{ $certificate->PlanEstudios }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Folio</th>
                            <td>{{ $certificate->Folio }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Matrícula</th>
                            <td>{{ $certificate->Matricula }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">CURP</th>
                            <td>{{ $certificate->CURP }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-6">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th class="bg-primary text-white">Nombre</th>
                            <td>{{ $certificate->Nombre }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Timbrado</th>
                            <td>{{ $certificate->Timbrado }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Tipo de Certificado</th>
                            <td>{{ $certificate->TipoCertificado }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Fecha</th>
                            <td>{{ $certificate->Fecha }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Cadena</th>
                            <td>{{ $certificate->Cadena }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Fecha y Hora de Timbrado</th>
                            <td>{{ $certificate->FechaHoraTimbrado }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Nombre de Área</th>
                            <td>{{ $certificate->NombreArea }}</td>
                        </tr>
                        <tr>
                            <th class="bg-primary text-white">Firmante</th>
                            <td>{{ $certificate->Firmante }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Incluye los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
