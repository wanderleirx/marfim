<section id="container">
<header id="header" class="">
   <div class="row-fluid">
      <div class="span12 global"> <!-- Div Global -->
         <div class="navbar  barra"> <!-- Barra de navegação -->
            <div class="navbar-inner menubar"> <!-- Div Menubar -->
               <div class="container "> <!-- Container da Barar de navegaçao -->
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </a>
                     <!-- Tenha certeza de deixar a marca se você quer que ela seja mostrada -->
                     <!-- Div itens do menu //===// Tudo que você queira escondido em 940px ou menos, coloque aqui -->
                  <div id="logo">
                     <a href="home.php">Painel Administrativo </a><small>Marfim Dedetizadora</small>
                  </div>
                  <div class="nav-collapse collapse">
                     <ul class="nav menu pull-right">
                        <li class="item-menu"><a class="link-menu" href="contatos.php">CONTATOS</a></li>
                        <li class="item-menu"><a class="link-menu" href="banner.php">BANNER</a></li> <li class="item-menu"><a class="link-menu" href="atendimento.php">ATENDIMENTO</a></li>
                        <li class="item-menu"><a class="link-menu" href="tabela-preco.php">TABELA PREÇO</a></li>
                     </ul>
                  </div> <!-- Fim Itens Menu -->
               </div> <!-- Fim Container -->
            </div> <!-- Fim Menubar -->
         </div> <!-- Fim Barra de navegação -->
      </div>
   </div>
   <div class="row-fluid">
      <div class="span12">
         <div class="login">
            <span class="btn btn-primary span2 disabled">USUÁRIO: <?php echo $_SESSION['nome']; ?></span>
            <a href="../actions/LoginController.php?logof=true" class="btn btn-primary pull-right">Sair</a>
            <a href="my-user.php" class="btn btn-primary pull-right" style="margin-right: 10px;" >My User</a>
         </div>
      </div>
   </div>
</header><!-- /header -->