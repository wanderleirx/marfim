<?php include_once('../functions/crud.php'); ?>
<footer>
   <div class="row-fluid rodape">
      <div class="span12">
         <div class="row-fluid">
            <div class="span3 offset1" id="box1">
               <h3>Marfim Dedetizadora</h3>
               <address>
                  Rua Alzira 60, Bairro Juliana<br/>
                  Belo Horizonte, MG<br>
                  <strong>CNPJ:</strong> 87t78tt78t7ti-i665<br/>
                  <strong>Telefone:</strong>(31) 3454-9859 / (31) 9898-98989
               </address>
            </div>
            <div class="span3 " id="box2">
               <h3>Contatos</h3>
               <?php $data = read('contatos', 'ds_contato, icon_contato', "WHERE nm_contato = 'Email' OR nm_contato = 'Telefone'") ;?>
               <ul>
                  <?php foreach($data as $res): extract($res) ?>
                     <li><?php echo "<img src='../img/uploads/$icon_contato' class='img-responsive' alt=''>";?> <span><?php echo $ds_contato; ?></span> </li>
                  <?php endforeach; ?>
               </ul>
            </div>
            <div class="span2 " id="box3">
               <h3>Links</h3>
               <ul >
                  <a href="home.php"><li>Home</li></a>
                  <a href="servicos.php"><li>Serviços</li></a>
                  <a href="orcamentos.php"><li>Orçamentos</li></a>
                  <a href="contatos.php"><li>Contatos</li></a>
               </ul>
               
            </div>
            <div class="span3 " id="box4">
               <h3>Redes Sociais</h3>
               <ul class="inline">
                   <a href=""><li><img src="../img/face.jpg" class="img-responsive" alt=""></li></a>
                   <a href=""><li><img src="../img/twitter.png" class="img-responsive" alt=""></li></a>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="row-fluid copyright">
      <div class="span12">
         <div id="copyright">
            WMA Desenvolvimento
         </div>
      </div>
   </div>   
</footer>
</body>

