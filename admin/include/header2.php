<?php $x = 1; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marfim Dedetizadora</title>
        <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../css/estilo.css" rel="stylesheet">
        <link href="../css/home.css" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="row-fluid"> <!-- Div Global -->
            <div class="span12 container"> <!-- Div Global -->
                <div class="row-fluid"> <!-- Div Banner Cabeçalho -->
                    <div class="span12 header">
                        <img src="../img/slide.jpg" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="row-fluid">
                    <div class=" usuario"> <!-- Div usuário (Login / Logof) -->
                        <?php if($x === 0): ?>
                            <img src="../img/login_off.jpg" class="img-responsive pull-right img-login-off" alt="">
                            <button type="button" class="btn-login btn btn-primary pull-right">Faça Login ou cadastre-se</button>
                        <?php else: ?>
                            <img src="../img/login_on.jpg" class="img-responsive img-login-on" alt="">
                            <span class="label label-info ">Usuário: Wilmar</span>
                            <button type="button" class="btn-logof btn btn-small btn-primary ">SAIR</button>
                        <?php endif; ?>
                    </div> <!-- Fim Div usuário (Login / Logof) -->
                </div>
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
                            <div class="nav-collapse collapse">
                                <ul class="nav menu">
                                    <li class="item-menu"><a class="link-menu" href="#">HOME</a></li>
                                    <li class="dropdown item-menu">
                                        <a class="dropdown-toggle link-menu" data-toggle="dropdown" href="#">SERVIÇOS<b class="caret down"></b></a>
                                        <ul class="dropdown-menu">
                                            <li class="subitem-menu"><a href="#">Desinsetização</a></li>
                                            <li class="subitem-menu"><a href="#">Desratização</a></li>
                                            <li class="subitem-menu"><a href="#">Descupinização</a></li>
                                            <li class="divider"></li>
                                            <li class="subitem-menu"><a href="#">Controle de Pombos</a></li>
                                            <li class="subitem-menu"><a href="#">Higienização de Caixa D'agua </a></li>
                                        </ul>
                                    </li>
                                    <li class="item-menu"><a class="link-menu" href="#">PRAGAS</a></li>
                                    <li class="item-menu"><a class="link-menu" href="#">ORÇAMENTOS</a></li>
                                    <li class="item-menu"><a class="link-menu" href="#">CONTATOS</a></li>
                                </ul>
                                <!-- .nav, .navbar-search, .navbar-form, etc -->
                            </div> <!-- Fim Itens Menu -->
                        </div> <!-- Fim Container -->
                    </div> <!-- Fim Menubar -->
                </div> <!-- Fim Barra de navegação -->
            