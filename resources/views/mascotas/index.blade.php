<!DOCTYPE html>
<html lang="es">
<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mascotass</title>
    <title>mascotass</title>
</head>
<body>

    <div class="container">
            <h4>gestion de mascotas</h4>
            <div class="row">
                <div class="col-xl-12">

                </div>
                <div class="col-lx-12">

                    <div class="table-responsive">

                        <table class="table table-striped">

                        <thead>
                            <tr>
                                <th>opciones</th>
                                <th>id</th>
                                <th>nombre</th>
                                <th>tipo</th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($mascotas as $mascotas)
                            <tr>
                                <td>editar eliminar</td>
                                <td>{{$mascotas->id_mascotas}}</td>
                                <td>{{$mascotas->nombre}}</td>
                                <td>{{$mascotas->tipo}}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        </tbody>

                        </table>

                    </div>

                </div>
            </div>
    </div>

</body>
</html>
