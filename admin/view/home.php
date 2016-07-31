<?php
   session_start();
   if(!isset($_SESSION['id_usuario']))
      header('Location: ../view/index.php');
   include_once('../include/head.php');
   include('../include/header.php');
?>
<section id="content" style=>
   <div class="row-fluid">
      <div class="span12">
      </div>
   </div>
</section>
<?php include_once('../include/footer.php'); ?> 
