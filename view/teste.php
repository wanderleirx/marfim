<?php 
   include_once('../include/head.php');
   include('../include/header.php');
?>
<section id="content">
	<?php foreach($atendimento as $res): extract($res);?>
		<?php echo $titulo; ?>
	<?php endforeach; ?>
	<br><hr>
</section>
<?php include_once('../include/footer.php') ?>