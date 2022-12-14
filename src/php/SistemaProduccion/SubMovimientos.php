<?php 

require_once($_SERVER['DOCUMENT_ROOT']."/src/php/auxiliar/log.php");
require_once($_SERVER['DOCUMENT_ROOT']."/src/php/SistemaProduccion/Movimientos.php");
    
class SubMovimientos
{

    public $conexion;

    function __construct(){        
        try {
            $this->conexion = new Movimientos();

            $this->API();
        } 
        catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    function API(){
        try{
            if(isset($_POST['Metodo'])){
                
                switch ($_POST['Metodo']) {

                    //GET NEXT ID
                    case 'getNextidSalida':
                        $conexion = new Movimientos();
                        $resultado = $conexion->getNextidSalida();
                        echo json_encode($resultado);
                    break;

                    case 'getNextidOrdenProduccion':
                        $conexion = new Movimientos();
                        $resultado = $conexion->getNextidOrdenProduccion();
                        echo json_encode($resultado);
                    break;

                    case 'getNextidDevolucion':
                        $conexion = new Movimientos();
                        $resultado = $conexion->getNextidDevolucion();
                        echo json_encode($resultado);
                    break;

                    case 'getNextIdCompra':
                        $conexion = new Movimientos();
                        $resultado = $conexion->getNextIdCompra();
                        echo json_encode($resultado);
                    break;

                    case 'getNextIdMerma':
                        $conexion = new Movimientos();
                        $resultado = $conexion->getNextIdMerma();
                        echo json_encode($resultado);
                    break;

                    //get for table
                    case 'getTableAllCompras':
                        $conexion = new Movimientos();
                        $resultado= $conexion->getTableAllCompras();
                        echo json_encode($resultado);
                    break;
                    
                    case 'getTableAllValesSalidas':
                        $conexion = new Movimientos();
                        $resultado= $conexion->getTableAllValesSalidas();
                        echo json_encode($resultado);
                    break;
                    
                    case 'getTableAllOrdenProduccion':
                        $conexion=new Movimientos();
                        $resultado=$conexion->getTableAllOrdenProduccion();
                        echo json_encode($resultado);
                    break;

                    case 'getTableAllDevoluciones':
                        $conexion=new Movimientos();
                        $resultado=$conexion->getTableAllDevoluciones();
                        echo json_encode($resultado);
                    break;
                    
                    case 'getTableAllMermas':
                        $conexion=new Movimientos();
                        $resultado=$conexion->getTableAllMermas();
                        echo json_encode($resultado);
                    break;
                    
                    //get for selected 
                    case 'getAllProveedoresSelect':
                        $conexion= new Movimientos();
                        $resultado= $conexion->getAllProveedoresSelect();
                        echo json_encode($resultado);
                    break;
                    
                    case 'getAllClasificacionSelect':
                        $conexion = new Movimientos();
                        $resultado = $conexion->getAllClasificacionSelect();
                        echo json_encode($resultado);
                    break;

                    case 'getAllInsumosSelect':
                        $idClasificacion = $_POST['idClasificacion'];
                        $conexion = new Movimientos();
                        $resultado = $conexion->getAllInsumosSelect($idClasificacion);
                        echo json_encode($resultado);
                    break;

                    case 'getAllOrdenProduccionSelect':
                        $conexion=new Movimientos();
                        $resultado=$conexion->getAllOrdenProduccionSelect();
                        echo json_encode($resultado);
                    break;

                    case 'getAllResponsableSelect':
                        $conexion=new Movimientos();
                        $resultado=$conexion->getAllResponsableSelect();
                        echo json_encode($resultado);
                    break;

                    case 'getAllPlantasfolestalesSelect':
                        $conexion=new Movimientos();
                        $resultado=$conexion->getAllPlantasfolestalesSelect();
                        echo json_encode($resultado);
                    break;

                    case 'getAllValesSalidaSelect':
                        $conexion=new Movimientos();
                        $resultado=$conexion->getAllValesSalidaSelect();
                        echo json_encode($resultado);
                    break;
                    
                    // get individual
                    case 'getCompras':
                        $idCompra= json_decode($_POST['idCompra']);
                        $conexion = New Movimientos();
                        $resultado = $conexion->getCompra($idCompra);
                        echo json_encode($resultado);
                    break;
                    
                    case 'getDetallesCompras':
                        $idCompra= json_decode($_POST['idCompra']);
                        $conexion = New Movimientos();
                        $resultado = $conexion->getDetallesCompras($idCompra);
                        echo json_encode($resultado);
                    break;

                    case 'getValeSalida': 
                        $idValeSalida=json_decode($_POST['idValeSalida']);
                        $conexion= new Movimientos();
                        $resultado= $conexion->getValeSalida($idValeSalida);
                        echo json_encode($resultado);
                    break;

                    case 'getProveedore':
                        $idProveedor = $_POST['idProveedor'];
                        $conexion = new Movimientos();
                        $resultado = $conexion->getProveedore($idProveedor);
                        echo json_encode($resultado);
                    break;
 
                    case 'getClasifiacion':
                        $idClasificacion = $_POST['idClasificacion'];
                        $conexion = new Movimientos();
                        $resultado = $conexion->getClasifiacion($idClasificacion);
                        echo json_encode($resultado);
                    break;
            
                    case 'getInsumos':
                        $idInsumo = $_POST['idInsumo'];
                        $conexion = new Movimientos();
                        $resultado = $conexion->getInsumos($idInsumo);
                        echo json_encode($resultado);
                    break;

                    case 'getOrdenProduccion':
                        $idOrdenProduccion = $_POST['idOrdenProduccion'];
                        $conexion = new Movimientos();
                        $resultado = $conexion->getOrdenProduccion($idOrdenProduccion);
                        echo json_encode($resultado);
                    break;

                    case 'getResponsable':
                        $idResponsable = $_POST['idResponsable'];
                        $conexion = new Movimientos();
                        $resultado = $conexion->getResponsable($idResponsable);
                        echo json_encode($resultado);
                    break;
                    
                    case 'getPlanta':
                        $idPlanta = $_POST['idPlanta'];
                        $conexion = new Movimientos();
                        $resultado = $conexion->getPlanta($idPlanta);
                        echo json_encode($resultado);
                    break;
                    
                    case 'getDevolucionInsumo':
                        $idDevolucion= json_decode($_POST['idDevolucion']);
                        $conexion = New Movimientos();
                        $resultado = $conexion->getDevolucionInsumo($idDevolucion);
                        echo json_encode($resultado);
                    break;

                    case 'getValeSalidaAdd':
                        $idVale = $_POST['idValeSalida'];
                        $conexion = new Movimientos();
                        $resultado = $conexion->getValeSalidaAdd($idVale);
                        echo json_encode($resultado);
                    break;

                    case 'getMermaInsumo':
                        $idMermaInsumos= json_decode($_POST['idMermaInsumos']);
                        $conexion = New Movimientos();
                        $resultado = $conexion->getMermaInsumo($idMermaInsumos);
                        echo json_encode($resultado);
                    break;
                    
                    case 'getDetalleMermaInsumo':
                        $idMermaInsumos= json_decode($_POST['idMermaInsumos']);
                        $conexion = New Movimientos();
                        $resultado = $conexion->getDetalleMermaInsumo($idMermaInsumos);
                        echo json_encode($resultado);
                    break;


                    //insert 
                    case 'insertCompraInsumos':
                        $datosCompra= json_decode($_POST['datosCompra']);
                        $detalles= json_decode($_POST['detalles']);
                        $conexion = New Movimientos();
                        $idCompra=$conexion->insertCompraInsumos($datosCompra->FechaOrden,$datosCompra->idProveedor,$datosCompra->factura,$datosCompra->total);
                        $conexion->insertDetalleCompra($idCompra,$detalles);
                        $this->GuardarArchivo($_SERVER['DOCUMENT_ROOT']."/src/PDF/FacturasCompras/",$idCompra);
                    break;

                    case 'insertOrdenProduccion':
                        $datosOrdenProduccion= json_decode($_POST['datosOrdenProduccion']);
                        $conexion = New Movimientos();
                        $idCompra=$conexion->insertOrdenProduccion($datosOrdenProduccion->idResponsable,$datosOrdenProduccion->idPlanta,$datosOrdenProduccion->fechaOrden,$datosOrdenProduccion->fechaAproxTermino,$datosOrdenProduccion->descripcion,$datosOrdenProduccion->cantidadEsperada);
                    break;

                    case 'cancelarOrdenProduccion':
                        $datosOrdenProduccion= json_decode($_POST['datosOrdenProduccion']);
                        $conexion = New Movimientos();
                        $idCompra=$conexion->cancelarOrdenProduccion($datosOrdenProduccion->idOrdenProduccion);
                    break;

                    case 'TerminarOrdenProduccion':
                        $datosOrdenProduccion= json_decode($_POST['datosOrdenProduccion']);
                        $conexion = New Movimientos();
                        $idCompra=$conexion->TerminarOrdenProduccion($datosOrdenProduccion->idOrdenProduccion,$datosOrdenProduccion->fechaReal,$datosOrdenProduccion->CantidadLograda,$datosOrdenProduccion->CostoProduccion);
                    break;

                    case 'InsertValeSalida':
                        $datosValesSalidas= json_decode($_POST['datosValesSalidas']);
                        $conexion = New Movimientos();
                        $idCompra=$conexion->InsertValeSalida($datosValesSalidas->idInsumo,$datosValesSalidas->idOrden,$datosValesSalidas->idResponsable,$datosValesSalidas->Fecha,$datosValesSalidas->cantidad);
                    break;
                    
                    case 'insertDevolucion':
                        $datosDevoluciones= json_decode($_POST['datosDevoluciones']);
                        $conexion = New Movimientos();
                        $idCompra=$conexion->insertDevolucion($datosDevoluciones->idValeSalida,$datosDevoluciones->idInsumo,$datosDevoluciones->FechaDevolucion,$datosDevoluciones->CantidadDevuelta);
                    break;

                    case 'insertMermaInsumos':
                        $datosMerma= json_decode($_POST['datosMerma']);
                        $detalles= json_decode($_POST['detalles']);
                        $conexion = New Movimientos();
                        $idMermaInsumos=$conexion->insertMermaInsumos($datosMerma->idResponsable,$datosMerma->fecha);
                        $conexion->insertDetallesMermaInsumos($idMermaInsumos,$detalles);
                    break;
                    
                    case 'getAllMotivoMermasSelect':
                        $conexion=new Movimientos();
                        $resultado=$conexion->getAllMotivoMermasSelect();
                        echo json_encode($resultado);
                    break;    


                    case 'getMotivoMermaInsumo':
                        $idMotivoMerma= $_POST['idMotivoMerma'];
                        $conexion= new Movimientos();
                        $resultado= $conexion->getMotivoMermaInsumo($idMotivoMerma);
                        echo json_encode($resultado);
                    break;
                    default:
                        echo "Metodo No encontrado";
                    break;
            
                }
            }
        }catch (Exception $e){
                save($e);
        }
    }

    function GuardarArchivo($ubicacion,$nombre){
        $nombre=$nombre.".pdf";
        $carpetaDestino=$ubicacion;
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
                            save("Archivo no movido");
                        }
                }else{
                        save("Archivo no es pdf");

                }
            }else{
                    save("Archivo no encotrado");
            }
    }
}

new SubMovimientos();




//getAllMotivoMermasSelect
//getMotivoMermaPlantaForestal