<?php
    include_once  ($_SERVER['DOCUMENT_ROOT']."/src/php/SistemaVentas/Catalago.php");
    $conexion = new Catalago();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA APEAJAL</title>
    <link href="/src/css/navbar.css" rel="stylesheet">
    <link href="/src/css/categorias.css" rel="stylesheet">
    <!--LINKS PARA BOOSTRAP y iconos-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!--Links para jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--Links para dataTable-->
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js" type="text/javascript" charset="utf8"></script>

    <!-- Links para alert-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
        
    <!--Links para funciones auxliar-->
    <script src="/src/js/auxliar.js" ></script>
    <script src="/src/js/login.js"></script></head>

<body>
    <div>
        <nav class="navbar logo">
            <a class="navbar-brand">
                <img src="/src/imagenes/Logo.jpeg" width="50VW" height="50VH" class="d-inline-block align-top" alt="">
            </a>
            <ul class="nav justify-content-between">
                <li class="nav-item">
                    <a id="home">
                        <img class="img-responsive" src="/src/imagenes/home.png" width="50VW" height="50VH" alt="" />
                    </a>                
                </li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a id="logout">
                        <img class="img-responsive" src="/src/imagenes/salida.png" width="50VW" height="50VH" alt="" />
                    </a>                
                </li>
            </ul>

        </nav>

       <nav class="navbar navbar-expand-lg menu">
            <div class="container-fluid">
                <div class="navbar-nav " id="navbarCenteredExample">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="btn  active menu catalago" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Catálogos</a>
                            <ul class="dropdown-menu menu catalago despegable" aria-labelledby="navbarDropdown">
                                <li id="Especies" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Categoria/Especies.php">Especies</a></li>
                                <li id="Plantas" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Categoria/Plantas.php">Plantas forestales</a></li>
                                <li id="Responsable" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Categoria/Responsable.php">Responsable</a></li>
                                <li id="Clientes" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Categoria/Clientes.php">Clientes</a></li>   
                                <li id="Usuarios" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Categoria/Usuarios.php">Usuarios</a></li>   
                                 <li id="MotivosMermas" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Categoria/MotivosMerma.php">Motivos merma</a></li>   
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="btn  active menu movimientos" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Movimientos</a>
                            <ul class="dropdown-menu menu movimientos despegable" aria-labelledby="navbarDropdown">
                                <li id="Pedios" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Movimientos/Predios.html">Predios</a></li>
                                <li id="Solicitud" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Movimientos/SolicitudPlantas.html">Solicitud de plantas</a></li>
                                <li id="Ventas" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Movimientos/Venta.html">Venta de plantas</a></li>
                                <li id="Pago" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Movimientos/Pagos.html">Pago de plantas</a></li>
                                <li id="Salidas" style="display: block;" ><a class="dropdown-item" href="/SistemaVentas/Movimientos/SalidaPlantas.html">Salida de plantas</a></li>
                                <li id="Mermas" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Movimientos/MermasPlantas.html">Mermas de plantas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown" id="consutal" style="display: block;">
                            <a class="btn  active menu consultas" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Consultas</a>
                            <ul class="dropdown-menu menu consultas despegable" aria-labelledby="navbarDropdown">
                                <li id="consutal1" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Reportes/RSolicitudes.html">Consulta de solicitudes</a></li>
                                <li id="consutal2" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Reportes/RVentas.html">Consulta de ventas</a></li>
                                <li id="consutal3" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Reportes/RPago.html">Consulta de pago</a></li>
                                <li id="consutal4" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Reportes/RSalida.html">consulta de salida</a></li>
                                <li id="consutal5" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Reportes/RInventarioFisicio.html">Consulta de existencias en almacén físico</a></li>
                                <li id="consutal6" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Reportes/RInventarioVirtual.html">Consultas de existencias en almacén virtual</a></li>
                                <li id="consutal7" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Reportes/Rmermas.html">Consulta de mermas</a></li>
                                <li id="consutal8" style="display: block;"><a class="dropdown-item" href="/SistemaVentas/Reportes/RBitacora.html">Consulta de bitácora</a></li>
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
        <div class="container botton">
            <div class="row">
                <div class="col-lg-2 ">
                </div>
                <div class="col-lg-7 ">

                </div>
                <div class="col-lg-2">
                    <button class="btn insert" type="submit" data-bs-toggle="modal" data-bs-target="#insert">Nuevo registro</button>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-lg-2 ">

                </div>

                <div class="col-lg-8 ">
                    <h2 style="text-align:center">Plantas forestales</h2>
                    <br>
                    <table id="table_id" class="display table table-responsive table-hover nowrap" width="100%">
                        <thead>
                            <tr>
                                <th>id </th>
                                <th>Especie</th>
                                <th>Descripción</th>
                                <th>Existencia</th>
                                <th>Precio</th>
                                <th>Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $resultado = $conexion->getPlantasForestal();    
                                foreach ($resultado as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['idPlanta'] . "</td>";
                                    echo "<td>" . $row['nombre'] . "<div style='visibility: hidden'>" . $row['idEspecie'] . " </div></td>";
                                    echo "<td>" . $row['descripcion'] . "</td>";
                                    echo "<td>" . $row['existencia'] . "</td>";
                                    echo "<td>" . $row['precio'] . "</td>";
                                    echo "<td><button type='button' class='btn update' data-bs-toggle='modal' data-bs-target='#update' onclick='update(this)'><i class='bi bi-nut'></i>  </button></td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-2">

                </div>
            </div>
        </div>

    </div>


    <!-- Modal formulario insertar-->
    <div class="modal fade" id="insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nueva planta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/SistemaVentas/Categoria/Plantas.php" method="POST" >
                    <input type="hidden" name="categoria" value="Agregar">
                    <div class="modal-body">
                        <div class="mb-3 row">

                            <label for="staticEmail" class="col-sm-2 col-form-label">Especie</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="idEspecie" id="idEspecie" required>
                                    <option disabled selected>Elija una opción</option>
                                    <?php
                                        $resultado = $conexion->getEspecies();
                                        foreach ($resultado as $row) {
                                            echo "<option value=".$row['idEspecie'].">". $row['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="Descripcion" name="Descripcion" placeholder="Descripcion" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+"  minlength="3" maxlength="40" />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Existencia</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" id="Existencia" name="Existencia" placeholder="Existencia" required pattern="[0-9]+" minlength="1" maxlength="11" />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" id="Precio" name="Precio" placeholder="Precio" required step="any" />
                                <label for="input"></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn cancel" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn insert">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal formulario Modificar-->
    <div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar datos de la planta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/SistemaVentas/Categoria/Plantas.php" method="POST" >
                <input type="hidden" name="categoria" value="Modificar">
                <input type="hidden" name="idPlantaM" id="idPlantaM">
                    <div class="modal-body">
                        <div class="mb-3 row">

                            <label for="staticEmail" class="col-sm-2 col-form-label">Especie</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="idEspecieM" id="idEspecieM" required>
                                    <option disabled selected>Elija una opción</option>
                                    <?php
                                        $resultado = $conexion->getEspecies();
                                        foreach ($resultado as $row) {
                                            echo "<option value=".$row['idEspecie'].">". $row['nombre']."</option>";
                                        }
                                    ?>
                                </select>
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="DescripcionM" name="DescripcionM" placeholder="Descripcion de la planta" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" minlength="3" maxlength="40" />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Existencia</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" id="ExistenciaM" name="ExistenciaM" placeholder="Cantidad en existencia de la planta" required pattern="[0-9]+" minlength="1" maxlength="11" />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Precio</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" id="PrecioM" name="PrecioM" placeholder="Precio" required step="any"/>
                                <label for="input"></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn cancel" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn insert">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const session = new login();


        /*los datos obtenidos de la modificacion se asignan por posicion en los elementos de la lista td*/
        $(document).ready( function () {
            session.confirmarlogin("Empleado");
            var table = $('#table_id').DataTable({
                scrollX:true
            });        
            $('#logout').click(function() {
            session.alertLogout();
            });
            $('#home').click(function() {
                window.location.href = "/menu.html"
            });
            if(session.position()=='Viverista'){
                document.getElementById("Especies").style.display = "none";
                document.getElementById("Plantas").style.display = "block";
                document.getElementById("Responsable").style.display = "none";
                document.getElementById("Clientes").style.display = "none";
                document.getElementById("Usuarios").style.display = "none";
                document.getElementById("MotivosMermas").style.display = "none";
                document.getElementById("Pedios").style.display = "none";
                document.getElementById("Solicitud").style.display = "none";
                document.getElementById("Ventas").style.display = "none";
                document.getElementById("Pago").style.display = "none";
                document.getElementById("Salidas").style.display = "block";
                document.getElementById("Mermas").style.display = "block";
                document.getElementById("consutal").style.display = "none";
                document.getElementById("consutal1").style.display = "none";
                document.getElementById("consutal2").style.display = "none";
                document.getElementById("consutal3").style.display = "none";
                document.getElementById("consutal4").style.display = "none";
                document.getElementById("consutal5").style.display = "none";
                document.getElementById("consutal6").style.display = "none";
                document.getElementById("consutal7").style.display = "none";
                document.getElementById("consutal8").style.display = "none";
        }
        });

        function update(context){

            var elementosTD=context.parentNode.parentNode.getElementsByTagName('td');
            document.getElementById("idPlantaM").value=elementosTD[0].textContent;
            document.getElementById('idEspecieM').value=elementosTD[1].textContent.match(/(\d+)/g);
            document.getElementById('DescripcionM').value=elementosTD[2].textContent;
            document.getElementById('ExistenciaM').value=elementosTD[3].textContent;
            document.getElementById('PrecioM').value=elementosTD[4].textContent;
            }

    </script>

    <?php
    if (isset($_POST)){
        if (isset($_POST["categoria"]) && $_POST["categoria"] == "Agregar"){
            $idEspecie = $_POST['idEspecie'];
            $descripcion = $_POST['Descripcion'];
            $existencia = $_POST['Existencia'];
            $precio = $_POST['Precio'];
            $resultado = $conexion->insertPlantaForestal($idEspecie, $descripcion, $existencia, $precio);
            unset($_POST);
            ob_start();
            echo("<meta http-equiv='refresh' content='1'>");
        }else if (isset($_POST["categoria"]) && $_POST["categoria"] == "Modificar"){
            $idPlanta = $_POST["idPlantaM"];
            $idEspecie = $_POST['idEspecieM'];
            $descripcion = $_POST['DescripcionM'];
            $existencia = $_POST['ExistenciaM'];
            $precio = $_POST['PrecioM'];
            $resultado = $conexion->updatePlantaForestal($idPlanta, $idEspecie, $descripcion, $existencia, $precio);
            unset($_POST);
            ob_start();
            echo("<meta http-equiv='refresh' content='1'>");
        }
    }
    ?>

</body>

</html>