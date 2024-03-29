<?php
  $page_title = 'Agregar cliente';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>

<?php include_once('layouts/header.php'); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<div class="login-page">
    <div class="text-center">
        <h3>Agregar nuevo cliente</h3>
    </div>

    <form id="formulario" method="post" action="mantFunctions.php" class="clearfix">
    <input type="hidden" name="_accion" value="guardarCliente">
        <div class="form-group">
            <label for="name" class="control-label">Nombre del cliente</label>
            <input type="name" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">Telefono</label>
            <input type="name" class="form-control" name="telefono" required>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">Direccion</label>
            <textarea type="name" class="form-control" name="direccion" required></textarea>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required>
        </div>
        <div class="form-group clearfix">
            <center><button type="submit" name="add" class="btn btn-info">Guardar</button><center>
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
            alert("Guardando cliente...");
        },
        success: function(res) {
            alert(res);
            document.location.href="clientes.php?resultado=exito";
        }
    });
}
</script>
<?php include_once('layouts/footer.php'); ?>