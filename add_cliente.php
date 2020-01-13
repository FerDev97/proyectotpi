<?php
  $page_title = 'Agregar grupo';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>

<?php include_once('layouts/header.php'); ?>
<div class="login-page">
    <div class="text-center">
       <h3>Agregar nuevo cliente</h3>
     </div>
    
      <form method="post" action="add_group.php" class="clearfix">
        <div class="form-group">
              <label for="name" class="control-label">Nombre del cliente</label>
              <input type="name" class="form-control" name="group-name" required>
        </div>
        <div class="form-group">
              <label for="level" class="control-label">Nivel del grupo</label>
              <input type="number" class="form-control" name="group-level">
        </div>
        
        <div class="form-group clearfix">
               <center> <button type="submit" name="add" class="btn btn-info">Guardar</button><center>
        </div>
    </form>
</div>

<?php include_once('layouts/footer.php'); ?>
