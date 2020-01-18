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
        default:
    break;
}
?>