<?php
    include_once  ($_SERVER['DOCUMENT_ROOT']."/src/php/SistemaProduccion/Movimientos.php");
    $conexion = new Movimientos();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA APEAJAL</title>
    <link href="/src/css/menu.css" rel="stylesheet">
    <link href="/src/css/navbar.css" rel="stylesheet">
    <link href="/src/css/movimientos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js" type="text/javascript" charset="utf8"></script>
</head>

<body>
    <div>
        <nav class="navbar logo">
            <a class="navbar-brand">
                <img src="/src/imagenes/Logo.jpeg" width="50VW" height="50VH" class="d-inline-block align-top" alt="">
            </a>
        </nav>

        <nav class="navbar navbar-expand-lg menu">
            <div class="container-fluid">
                <div class="navbar-nav " id="navbarCenteredExample">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="btn  active menu catalago" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Catálogos</a>
                            <ul class="dropdown-menu menu catalago despegable" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/SistemaProduccion/Categorias/Clasificacion.php">Clasificación de insumos</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Categorias/insumos.php">Insumos</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Categorias/Provedores.php">Proveedores</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Categorias/Responsable.php">Responsable</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn  active menu movimientos" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Movimientos</a>
                            <ul class="dropdown-menu menu movimientos despegable" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/SistemaProduccion/Movimientos/OrdenProduccion.php">Órdenes producción</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Movimientos/ComprasInsumos.php">Compra de insumos</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Movimientos/ValesSalidaInsumos.php">Vale de salida</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Movimientos/DevolucionesInsumos.php">Devolución de insumos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn  active menu consultas" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Consultas</a>
                            <ul class="dropdown-menu menu consultas despegable" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/SistemaProduccion/Reportes/InsimosCalsificaciones.php">Reporte de insumos por clasificación</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Reportes/Provedores.php">Reporte de proveedores</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Reportes/ValesSalidaPeriodos.php">Reporte de vales de salida por período</a></li>
                                <li><a class="dropdown-item" href="/SistemaProduccion/Reportes/OrdenProduccionPendiente.php">Reporte de órdenes de producción pendientes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg">
            <div class="linea"></div>
        </nav>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 ">
                </div>
                <div class="col-lg-8 card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="staticEmail" class="form-label">id Devolución</label>
                            <input class="form-control" type="text" name="domicilioProveedor" id="domicilioProveedor" disabled />
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-center"> Nuevo Devolución</h3>
                        </div>
                        <div class="col-md-3">
                            <label for="staticEmail" class="form-label">Fecha</label>
                            <input class="form-control" type="date" name="domicilioProveedor" id="domicilioProveedor" disabled />
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 ">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 ">

                </div>

                <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">Vale de Devolución</div>
                    <div class="card-body">
                            <div class="row g-3">
                                <select class="form-select" name="idProvedor" id="idProvedor" required onchange="getProveedores()">
                                <option disabled selected>Escoja una opcion</option>
                                    <?php
                                        $resultado = $conexion->getAllProveedores();
                                        foreach ($resultado as $row) {
                                            echo "<option value=".$row['idProveedor'].">". $row['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                            <hr>
                            <div class="row g-3">
                                <div class="col-md-12">Responsable</div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="staticEmail" class="form-label">Nombre</label>
                                    <input class="form-control" type="text" name="domicilioProveedor" id="domicilioProveedor" disabled />
                                </div>
                                <div class="col-md-6">
                                    <label for="staticEmail" class="form-label">Puesto</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" disabled/>
                                </div>
                            </div>
                            <hr>
                            <div class="row g-3">
                                <div class="col-md-12">Insumo</div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">Nombre</label>
                                    <input class="form-control" type="text" name="domicilioProveedor" id="domicilioProveedor" disabled />
                                </div>
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">Categoria</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" disabled/>
                                </div>
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">descripcion</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" disabled/>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">Unidad</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" disabled/>
                                </div>
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">existencias</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" disabled/>
                                </div>
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">cantidad</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" disabled/>
                                </div>
                            </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-2">

                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-2 ">

                </div>

                <div class="col-lg-8 ">
                        <div class="card">
                        <div class="card-header">Planta</div>
                        <div class="card-body">
                            <div class="row g-3">
                                <select class="form-select" name="idProvedor" id="idProvedor" required onchange="getProveedores()">
                                <option disabled selected>Escoja una opcion</option>
                                    <?php
                                        $resultado = $conexion->getAllProveedores();
                                        foreach ($resultado as $row) {
                                            echo "<option value=".$row['idProveedor'].">". $row['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                                <label for="input"></label>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-3">
                                    <label for="staticEmail" class="form-label">Nombre</label>
                                    <input class="form-control" type="text" name="domicilioProveedor" id="domicilioProveedor" disabled />
                                </div>
                                <div class="col-md-3">
                                    <label for="staticEmail" class="form-label">descripcion</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" disabled/>
                                </div>
                                <div class="col-md-3">
                                    <label for="staticEmail" class="form-label">existencias</label>
                                    <input class="form-control" type="text" name="domicilioProveedor" id="domicilioProveedor" disabled />
                                </div>
                                <div class="col-md-3">
                                    <label for="staticEmail" class="form-label">precio</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" disabled/>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-3">
                                    <label for="staticEmail" class="form-label">Costo</label>
                                    <input class="form-control" type="text" name="domicilioProveedor" id="domicilioProveedor" />
                                </div>
                                <div class="col-md-3">
                                    <label for="staticEmail" class="form-label">Cantidad</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor" />
                                </div>
                            </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-2">

                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-lg-2 ">

                </div>

                <div class="col-lg-8 ">
                    <div class="card">
                        <div class="card-header">Datos</div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">Fecha aproximada de termino</label>
                                    <input class="form-control" type="text" name="domicilioProveedor" id="domicilioProveedor" />
                                </div>
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">descripcion</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor"/>
                                </div>
                                <div class="col-md-4">
                                    <label for="staticEmail" class="form-label">cantidad esperada</label>
                                    <input class="form-control" type="text" name="telefonoProveedor" id="telefonoProveedor"/>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <button type="button" class="btn btn-primary btn-xs btn-block" >Guardar Orden</button>
                                </div>
                            </div>
                </div>
                                    </div>
                    </div>
                </div>
<br>
                <div class="col-lg-2">

                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

</body>
</html>