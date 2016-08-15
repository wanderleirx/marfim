<?php 
   include_once('../service/GeneralService.php');
   include_once('../include/head.php');
   include_once('../include/header.php');
?>
<section id="content">
   <div class="row-fluid">
      <div class="span12">
         <div id="banner-container">
            <div id="carrossel" class="carousel slide">
               <div class="carousel-inner banner-inner"  >
                  <img src='../img/slide3.jpg' class='img-responsive active item' alt=''>
                  <?php foreach($banner as $res): extract($res); ?>
                     <?php echo "<img src='../img/uploads/$img_banner' class='img-responsive item' alt=''>" ?>
                  <?php endforeach; ?>
               </div>
               <a class="carousel-control left" href="#carrossel" data-slide="prev">&lsaquo;</a>
               <a class="carousel-control right" href="#carrossel" data-slide="next">&rsaquo;</a>
            </div>
         </div>
      </div>
   </div>
   <div class="row-fluid">
      <div class="span12">
         <div id="row">
            <h2>Faça seu orçamento online</h2>
            <p>É rapido, prático e você tem a resposta na hora</p>
            <button type="button" onclick="pageRedirectsJs('orcamentos.php')">Orçamento</button>
         </div>
      </div>
   </div>
   <div class="row-fluid "> <!-- Div Linha do Locais de Atendimento -->
      <div class="span10 offset1 carrossel"> <!-- Div Locais de Atendimento  -->
         <h3>Atendimento</h3>
         <hr/>
            <ul class="thumbnails" style="">
            <?php foreach($linha1 as $res): extract($res);?>
               <li class="span3 atend">
                  <div class="thumbnail inner-border">
                     <h3><?= $titulo1 ?></h3>
                     <img src="../img/uploads/<?=$img_linha1?>" class="img-responsive ">
                     <p class=""><?= $texto1 ?></p>
                  </div>
               </li>
            <?php endforeach; ?>
            </ul>
            <?php if($numLinha2 > 0): ?>
            <ul class="thumbnails" style="">
            <?php foreach($linha2 as $res): extract($res);?>
               <li class="span3 atend">
                  <div class="thumbnail inner-border">
                     <h3><?= $titulo2 ?></h3>
                     <img src="../img/uploads/<?=$img_linha2?>" class="img-responsive ">
                     <p class=""><?= $texto2 ?></p>
                  </div>
               </li>
            <?php endforeach; ?>
            </ul>
         <?php endif; ?>
      </div>
   </div>
   <div class="row-fluid servicos">
      <div class="span10 offset1">
         <h3>Serviços</h3>
         <hr/>
         <div class="row-fluid servicos">
            <?php for($i=0;$i<1;$i++): ?>
               <div class="span12">
                  <p class="lead">Prestamos os mais variados tipos de serviço no combate de pragas urbanas. Desinsetização, Desratização, Descupinização, Controle de pombos, Higienização de caixa d'agua, entre outros.</p>
                  <p class="lead">Click no link e veja a descrição de cada tipo de serviços <a href="servicos.php" class="btn btn-success">Saiba mais</a></p>
               </div>
            <?php endfor; ?>
         </div>
      </div>
   </div>
</section>
<?php include_once('../include/footer.php') ?>