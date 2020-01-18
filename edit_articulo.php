<?php
  $page_title = 'Editar articulo';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
     require_once('includes/dbCon.php');
$dbConn = conectar();

?>

<?php include_once('layouts/header.php'); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<div class="login-page">
    <div class="text-center">
        <h3>Agregar nuevo articulo</h3>
    </div>
    <?php   $sql = "SELECT * FROM articulos where id_articulo=".$_REQUEST["id"];
            $query = mysqli_query($dbConn, $sql) or die(mysqli_error($dbConn));
            $cliente = mysqli_fetch_assoc($query);
               
               
               ?>
    <form id="formulario" method="post" action="mantFunctions.php" class="clearfix">
        <input type="hidden" name="_accion" value="editarArticulo">
        <input type="hidden" name="id" value="<?php echo $cliente['id_articulo'];?>">
        <div class="form-group">
            <label for="name" class="control-label">Nombre del articulo</label>
            <input type="name" class="form-control" name="nombre" value="<?php echo $cliente['nombre'];?>" required>
        </div>
      
        <div class="form-group">
            <label for="name" class="control-label">Descripcion</label>
            <textarea type="name" class="form-control" name="descripcion" value="" required><?php echo $cliente['descripcion'];?></textarea>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">Precio</label>
            <input type="text" class="form-control" name="precio" value="<?php echo $cliente['precio'];?>" required>
        </div>
        <div class="form-group clearfix">
            <center><button type="submit" name="add" class="btn btn-info">Editar</button>
                <center>
        </div>
    </form>
</div>
<script>
$("#formulario").submit(function(event) {
    fnGuardar();
    event.preventDefault();
});

function fnGuardar() {
    $.ajax({
        type: 'POST',
        url: 'mantFunctions.php?' + $("form").serialize(),
        dataType: 'HTML',
        beforeSend: function() {
            alert("Editando articulo...");
        },
        success: function(res) {
            alert(res);
            document.location.href = "articulos.php?resultado=exito";
        }
    });
}
</script>
<?php include_once('layouts/footer.php'); ?>