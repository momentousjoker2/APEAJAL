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
                    <button class="btn insert" type="submit" data-bs-toggle="modal" data-bs-target="#insert" onclick="getUltimoInsert()">Nuevo registro</button>
                </div>
            </div>
        </div>

    <div>


        <div class="container">
            <div class="row">
                <div class="col-lg-2">

                </div>
                <div class="col-lg-8 ">
                    <h2 style="text-align:center">Clientes</h2>
                    <br>
                    <table id="table_id" class="display table table-responsive table-hover nowrap" width="100%">
                        <thead>
                            <tr>
                                <th>  </th>
                                <th>Razón social</th>
                                <th>RFC</th>
                                <th>CURP</th>
                                <th>Domicilio</th>
                                <th>Municipio</th>
                                <th>Estado</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Celular</th>
                                <th>Tipo de cliente</th>
                                <th>Constancia de situación fiscal</th>
                                <th>Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $resultado = $conexion->getClient();
                                    foreach ($resultado as $row) {
                                        echo "<tr>";
                                        echo "<td>" . $row['idCliente'] . "</td>";
                                        echo "<td>" . $row['razonSocial'] . "</td>";
                                        echo "<td>" . $row['RFC'] . "</td>";
                                        echo "<td>" . $row['CURP'] . "</td>";
                                        echo "<td>" . $row['domicilio'] . "</td>";
                                        echo "<td>" . $row['ciudad'] . "</td>";
                                        echo "<td>" . $row['estado'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                        echo "<td>" . $row['telefono'] . "</td>";
                                        echo "<td>" . $row['celular'] . "</td>";
                                        echo "<td>" . $row['tipoCliente'] . "</td>";
                                        echo "<td><a class='btn download' role='button' href=/src/PDF/ConstanciaFiscal/". $row['idCliente'].".pdf>Descargar</a></td>";
                                        echo "<td><button type='button' class='btn update' data-bs-toggle='modal' data-bs-target='#update' onclick='update(this)'><i class='bi bi-nut'></i> </button></td>";
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


    <!-- Modal formulario insertar -->
    <div class="modal fade" id="insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/SistemaVentas/Categoria/Clientes.php" method="POST" enctype="multipart/form-data"   >
                <input type="hidden" name="categoria" value="Agregar">
                <input type="hidden" name="idCliente" id="idCliente">
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Razón social</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="RazonSocial" name="RazonSocial" placeholder="Nombre o Razon Social " required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" minlength="1" maxlength="40"   />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">RFC</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="RFC" name="RFC" placeholder="RFC " pattern="[A-Za-z0-9 ]+" minlength="1" maxlength="15" />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">CURP</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="CURP" name="CURP" placeholder="CURP" pattern="[A-Za-z0-9 ]+" minlength="1" maxlength="15" />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Domicilio</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="domicilio" name="domicilio" placeholder="domicilio" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-#]+" minlength="1" maxlength="20"   />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Municipio </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="Ciudad" name="Ciudad" placeholder="Ciudad  " required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-#]+" minlength="1" maxlength="20"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Estado </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="Estado" name="Estado" placeholder="Estado   " required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-#]+" minlength="1" maxlength="20"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" id="email" name="email" placeholder="Correo Electronico " required/>
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Teléfono</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" id="Telefono" name="Telefono" placeholder="Telefono fijo " required pattern="[0-9]+" minlength="3"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" id="Celular" name="Celular" placeholder="Celular " required pattern="[0-9,.]+" minlength="3"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Tipo de cliente</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="idTipoCliente" id="idTipoCliente" required>
                                    <option disabled selected>Elija una opción</option>
                                    <option value="Donación">Donación</option>
                                    <option value="Venta">Venta</option>
                                </select>
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Constancia de situación fiscal</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="file" name="file"  accept="application/pdf" />
                                <label for="input"></label>
                            </div>
                            <label for="staticEmail" class="form-label">En caso de necesitar factura subir constancia</label>
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

    <!-- Modal update -->
    <div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificar datos </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/SistemaVentas/Categoria/Clientes.php" method="POST" enctype="multipart/form-data"   >
                    <input type="hidden" name="categoria" value="Modificar">
                    <input type="hidden" name="idClienteM" id="idClienteM">
                        <div class="modal-body">
                        <div class="mb-3 row">

                            <label for="staticEmail" class="col-sm-2 col-form-label">Razón social</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="RazonSocialM" name="RazonSocialM" placeholder="Nombre " required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" minlength="1" maxlength="40"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">RFC</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="RFCM" name="RFCM" placeholder="RFC" pattern="[A-Za-z0-9 ]+" minlength="1" maxlength="15" />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">CURP</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="CURPM" name="CURPM" placeholder="CURP" pattern="[A-Za-z0-9 ]+" minlength="1" maxlength="15" />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Domicilio</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="domicilioM" name="domicilioM" placeholder="domicilio" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-#]+" minlength="1" maxlength="20"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Municipio </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="CiudadM" name="CiudadM" placeholder="Ciudad" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-#]+" minlength="1" maxlength="20"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Estado </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="EstadoM" name="EstadoM" placeholder="Estado" required pattern="[0-9a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+" minlength="1" maxlength="10"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" id="emailM" name="emailM" placeholder="Correo Electronico" required/>
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Teléfono</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" id="TelefonoM" name="TelefonoM" placeholder="Telefono fijo" required pattern="[0-9]+" minlength="1" maxlength="20"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" id="CelularM" name="CelularM" placeholder="Celular" required pattern="[0-9,.]+" minlength="1" maxlength="20"  />
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Tipo de cliente</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="idTipoClienteM" id="idTipoClienteM" required>
                                    <option disabled selected>Elija una opción</option>
                                    <option value="Donación">Donación</option>
                                    <option value="Venta">Venta</option>
                                </select>
                                <label for="input"></label>
                            </div>

                            <label for="staticEmail" class="col-sm-2 col-form-label">Constancia de situación fiscal</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="file" name="file"  accept="application/pdf" />
                                <label for="input"></label>
                            </div>
                            <label for="staticEmail" class="form-label">En caso de necesitar factura subir constancia</label>
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
    </div>

<script>
        const session = new login();
        $(document).ready( function () {
            
            var td=$('#table_id').DataTable({
                    scrollX:true
            });
            session.confirmarlogin("Empleado");
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

            document.getElementById("idClienteM").value=elementosTD[0].textContent;
            document.getElementById("RazonSocialM").value=elementosTD[1].textContent;
            document.getElementById("RFCM").value=elementosTD[2].textContent;
            document.getElementById("CURPM").value=elementosTD[3].textContent;
            document.getElementById('domicilioM').value=elementosTD[4].textContent;
            document.getElementById('CiudadM').value=elementosTD[5].textContent;
            document.getElementById('EstadoM').value=elementosTD[6].textContent;
            document.getElementById('emailM').value=elementosTD[7].textContent;
            document.getElementById('TelefonoM').value=elementosTD[8].textContent;
            document.getElementById('CelularM').value=elementosTD[9].textContent;
            document.getElementById('idTipoClienteM').value=elementosTD[10].textContent;
            }

        function getUltimoInsert(){
            $.ajax({
                url: "/src/php/SistemaVentas/SubCatalagos.php",
                method: "POST",
                data: {
                    "Busqueda":"NextCliente"
                },
                success: function(respuesta){
                    respuesta=JSON.parse(respuesta);
                    document.getElementById("idCliente").value=respuesta[0]['AUTO_INCREMENT'];
                }
            })   
        }
</script>
<?php


    if (isset($_POST)){
        if (isset($_POST["categoria"]) && $_POST["categoria"] == "Agregar"){
            $idCliente = $_POST['idCliente'];   
            $RazonSocial = $_POST['RazonSocial'];
            $RFC = $_POST['RFC'];
            $CURP = $_POST['CURP'];
            $domicilio = $_POST['domicilio'];
            $Ciudad = $_POST['Ciudad'];
            $Estado = $_POST['Estado'];
            $email = $_POST['email'];
            $Telefono = $_POST['Telefono'];
            $Celular = $_POST['Celular'];
            $idTipoCliente = $_POST['idTipoCliente'];
            GuardarArchivo($idCliente);
            $resultado = $conexion->insertClientes($RazonSocial,$RFC,$CURP,$domicilio,$Ciudad,$Estado,$email,$Telefono, $Celular, $idTipoCliente);
            unset($_POST);
            unset($_FILES);
            ob_start();
            echo("<meta http-equiv='refresh' content='1'>");
        }else if (isset($_POST["categoria"]) && $_POST["categoria"] == "Modificar"){
            $idCliente = $_POST['idClienteM'];
            $RazonSocial = $_POST['RazonSocialM'];
            $RFC = $_POST['RFCM'];
            $CURP = $_POST['CURPM'];
            $domicilio = $_POST['domicilioM'];
            $Ciudad = $_POST['CiudadM'];
            $Estado = $_POST['EstadoM'];
            $email = $_POST['emailM'];
            $Telefono = $_POST['TelefonoM'];
            $Celular = $_POST['CelularM'];
            $idTipoCliente = $_POST['idTipoClienteM'];
            GuardarArchivo($idCliente);
            $resultado = $conexion->updateClientes($idCliente,$RazonSocial,$RFC,$CURP,$domicilio,$Ciudad,$Estado,$email,$Telefono,$Celular,$idTipoCliente);
            unset($_POST);
            unset($_FILES);
            ob_start();
            echo("<meta http-equiv='refresh' content='1'>");
        }
    }

    function GuardarArchivo($nombre){
        $nombre=$nombre.".pdf";
        $carpetaDestino=$_SERVER['DOCUMENT_ROOT']."/src/PDF/ConstanciaFiscal/";
        if(isset($_FILES["file"]))
            {
                if($_FILES["file"]["type"]=="application/pdf")
                {
                    if(!file_exists($carpetaDestino)){
                        mkdir($carpetaDestino, 0777);
                    }
                    $origen=$_FILES["file"]["tmp_name"];
                    $destino=$carpetaDestino.$nombre;
                    if(move_uploaded_file($origen, $destino))
                    {
                        }else{
                        }
                }else{
                }
            }else{
            }
    }
?>

</body>

</html>