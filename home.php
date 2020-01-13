<?php
  $page_title = 'D E M E R E';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>D E M E R E </h1>
         <h2> Declaracion de Mercaderia y Equipajes</h2>
        

         <img src="https://www.flytap.com/-/media/Flytap/fly-tap/lead-images/bagagem-de-porao-ld.svg?la=es-ES&hash=100855609726F99100FD9EA27F71B78C395BBE61">
     
      </div>
    </div>
 </div>
</div>
<?php include_once('layouts/footer.php'); ?>
