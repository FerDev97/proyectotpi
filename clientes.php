<?php
  $page_title = 'Lista de grupos';
  require_once('includes/load.php');
  require_once('includes/dbCon.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
   $dbCon=conectar();
 
?>
<?php include_once('layouts/header.php'); ?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script src="libs/js/Spanish.js"></script>
<style>
    .dataTables_filter {
   width: 50%;
   float: right;
   text-align: right;
}
</style>
<div class="row">
   <div class="col-md-12">
     <?php echo display_msg($msg); ?>
   </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
    <div class="panel-heading clearfix">
      <strong>
        <span class="glyphicon glyphicon-th"></span>
        <span>Clientes</span>
     </strong>
       <a href="add_group.php" class="btn btn-info pull-right btn-sm"> Agregar cliente</a>
    </div>
     <div class="panel-body">
      <table id="tabla-clientes" class="table table-bordered" style="width:100%;">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th class="text-center" style="width: 20%;">Telefono</th>
            <th class="text-center" style="width: 15%;">Estado</th>
            <th class="text-center" style="width: 100px;">Acciones</th>
          </tr>
        </thead>
        <tbody>
        <?php  $sql = "SELECT * FROM clientes";
                $query = mysqli_query($dbCon, $sql) or die(mysqli_error($dbConn));
                while ($grupo = mysqli_fetch_assoc($query)) {?>
          <tr>
           <td class="text-center"><?php echo count_id();?></td>
           <td><?php echo remove_junk(ucwords($grupo['nombre']))?></td>
           <td><?php echo remove_junk(ucwords($grupo['direccion']))?></td>
           <td class="text-center">
             <?php echo remove_junk(ucwords($grupo['telefono']))?>
           </td>
           <td class="text-center">
           <?php if($grupo['estado'] === 'activo'): ?>
            <span class="label label-success"><?php echo "Activo"; ?></span>
          <?php else: ?>
            <span class="label label-danger"><?php echo "Inactivo"; ?></span>
          <?php endif;?>
           </td>
           <td class="text-center">
             <div class="btn-group">
                <a href="edit_group.php?id=<?php echo (int)$grupo['id'];?>" class="btn btn-xs btn-warning" data-toggle="tooltip" title="Editar">
                  <i class="glyphicon glyphicon-pencil"></i>
               </a>
                <a href="delete_group.php?id=<?php echo (int)$grupo['id'];?>" class="btn btn-xs btn-danger" data-toggle="tooltip" title="Eliminar">
                  <i class="glyphicon glyphicon-remove"></i>
                </a>
                </div>
           </td>
          </tr>
                <?php }?>
       </tbody>
     </table>
     </div>
    </div>
  </div>
</div>
<script>
	
$(document).ready(function() {
    $('#tabla-clientes').DataTable();
} );
</script>
<?php if(isset($db)) { $db->db_disconnect(); } ?>
  
