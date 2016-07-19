<?php 
   include_once('../include/head.php');
   include('../include/header.php');
?>
<section id="content" style="margin-bottom: 200px;">
   <div class="row-fluid">
      <div class="span12">
         <div id="container-banner">
            <img src="../img/slide.jpg" class="img-responsive" alt="">
         </div>
      </div>
   </div>
   <div class="row-fluid">
      <div class="span12">
         <div id="row">
            <h2>Faça seu orçamento online</h2>
            <p>É rapido, prático e você tem a resposta na hora</p>
            <button type="button">Orçamento</button>
         </div>
      </div>
   </div>
   <div class="row-fluid "> <!-- Div Linha do Locais de Atendimento -->
      <div class="span10 offset1 carrossel"> <!-- Div Locais de Atendimento  -->
         <h3>Atendimento</h3>
         <hr/>
         <div id="carrossel" class="carousel slide">
            <!-- Itens de carousel -->
            <div class="carousel-inner banner-inner"  >
               <div class="active item">
               <?php for($i=0;$i<3;$i++): ?>
                  <li class="span4 item-carrossel">
                        <h3>Rótulo para a miniatura</h3>
                        <img src="../img/casa.jpg" class="img-responsive img-carrossel" alt="">
                        <p class="">Texto do thumbnail... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <!-- exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat --> nulla pariatur.</p>
                  </li>
               <?php endfor; ?>
               </div>
               <div class="item">
               <?php for($i=0;$i<3;$i++): ?>
                   <li class="span4 item-carrossel">
                        <h3>Rótulo para a miniatura</h3>
                        <img src="../img/casa.jpg" class="img-responsive img-carrossel" alt="">
                        <p class="">Texto do thumbnail... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <!-- exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat --> nulla pariatur.</p>
                  </li>
               <?php endfor; ?>
               </div>
            </div>
            <a class="carousel-control left" href="#carrossel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#carrossel" data-slide="next">&rsaquo;</a>
         </div>
      </div>
   </div>
   <div class="row-fluid servicos">
      <div class="span10 offset1">
         <h3>Serviços</h3>
         <hr/>
         <div class="row-fluid servicos">
            <?php for($i=0;$i<4;$i++): ?>
               <div class="span3">
                  <h4>Rótulo para a miniatura</h4>
                  <p class="">Texto do thumbnail... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud <!-- exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat --> nulla pariatur.</p>
               </div>
            <?php endfor; ?>
         </div>
      </div>
   </div>
</section>
            