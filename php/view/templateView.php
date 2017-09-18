<?php
//---------INCLUDES-----------//
require_once 'php/controller/templateController.php';
$pg = isset($_GET['p']) ? $_GET['p'] : '';
$view = pg($pg);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
        <script src='js/jquery.dataTables.min.js'></script>
        <script src='https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js'></script>
        <script src="js/bootstrap.min.js"></script>
        <link href="css/Supernice.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <link href="css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-datepicker3.standalone.css" rel="stylesheet" type="text/css"/>
        <script src="locales/bootstrap-datepicker.pt-BR.min.js" type="text/javascript"></script>
        <script src="js/validator.js" type="text/javascript"></script>
        <script src="js/validator.min.js" type="text/javascript"></script>
        <script src="js/jquery.mask.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
        <title><?php title($pg); ?></title>
    </head>
    <body>
        <div class="container-fluid" id="header">
            <img id="logo" src='img/logo.png'>
            <div class="menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <a class="navbar-brand" href="#">AO VIVO</a>
                      </div>
                      <ul class="nav navbar-nav">
                        <li><a href="?p=av">AGENDAR EVENTO</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                CALENDÁRIO <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="?p=pv">EVENTOS PRÓXIMOS</a></li>
                                <li><a href="?p=atv">EVENTOS ANTERIORES</a></li>
                                <li><a href="?p=agv">EVENTOS AGUARDANDO APROVAÇÃO</a></li>
                            </ul>
                        </li>
                      </ul>
                      <ul style="float: right;" class="nav navbar-nav">
                        <li><a href="?p=lv">LOGIN</a></li>
                      </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid" id="content">
            <?php include $view ?>
        </div>
        <div class="container-fluid" id="footer">
            <p>DI/GETEL</p>
            <p>© 2017 IBGE</p>
        </div>
    </body>
</html>