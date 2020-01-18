<?php 
// Esta pagina sirve para ejecutar consultas en la bd
  require_once('includes/load.php');
  require_once('includes/dbCon.php');
$dbConn = conectar();

switch ($_REQUEST['_accion']) {

	case 'guardarCliente':
		$sqlBit = "INSERT INTO clientes(nombre, telefono, direccion, fecha_nacimiento) VALUES( '" . $_REQUEST['nombre'] . "' ,'" . $_REQUEST['telefono'] . "' ,'" . $_REQUEST['direccion'] . "' ,'" . $_REQUEST['fecha_nacimiento'] . "' )";
        $resBit = mysqli_query($dbConn, $sqlBit) or die(mysqli_error($dbConn));
        echo "Cliente guardado";
        break;
        case "editarCliente":
            $sql = "UPDATE clientes set nombre='" . $_REQUEST['nombre'] . "',telefono='" . $_REQUEST['telefono'] . "',direccion='" . $_REQUEST['direccion'] . "',fecha_nacimiento='" . $_REQUEST['fecha_nacimiento'] . "' where id_cliente='" . $_REQUEST['id'] . "'";
					$query = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
			  echo "Cliente editado";
        break;
        case "desactivarCliente":
            $sql = "UPDATE  clientes set  estado='inactivo' where id_cliente='" . $_REQUEST['id_cliente'] . "'";
					$query = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
			  echo "Cliente desactivado";
        break;
        case "activarCliente":
            $sql = "UPDATE  clientes set estado='activo'  where id_cliente='" . $_REQUEST['id_cliente'] . "'";
					$query = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
			  echo "Cliente activado";
        break;
        //PARA LOS ARTICULOS
        case 'guardarArticulo':
		$sqlBit = "INSERT INTO articulos(nombre, descripcion, precio) VALUES( '" . $_REQUEST['nombre'] . "' ,'" . $_REQUEST['descripcion'] . "' ,'" . $_REQUEST['precio'] . "')";
        $resBit = mysqli_query($dbConn, $sqlBit) or die(mysqli_error($dbConn));
        echo "Articulo guardado";
        break;
        case "editarArticulo":
            $sql = "UPDATE articulos set nombre='" . $_REQUEST['nombre'] . "',descripcion='" . $_REQUEST['descripcion'] . "',precio='" . $_REQUEST['precio'] . "' where id_articulo='" . $_REQUEST['id'] . "'";
					$query = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
			  echo "Articulo editado";
        break;
        case "desactivarArticulo":
            $sql = "UPDATE  articulos set  estado='inactivo' where id_articulo='" . $_REQUEST['id_articulo'] . "'";
					$query = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
			  echo "Articulo desactivado";
        break;
        case "activarArticulo":
            $sql = "UPDATE  articulos set estado='activo'  where id_articulo='" . $_REQUEST['id_articulo'] . "'";
					$query = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
			  echo "Articulo activado";
        break;
        default:
    break;
}
?>