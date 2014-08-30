<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width">
<title>..:: M.J Transportes e Logistica ::..</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/stylo.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans|Cuprum' rel='stylesheet'>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
</head>

<body>

<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Menu Responsivel -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logof.jpg"></a>
            </div>
            <!-- Menu de navegação -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="quemsomos.php"><span class="glyphicon glyphicon-road"></span> Quem Somos</a></li>
                    <li><a href="servicos.php"><span class="glyphicon glyphicon-cog"></span> Serviços</a></li>
                    <li><a href="nossosclientes.php"><span class="glyphicon glyphicon-user"></span> Nossos Clientes</a></li>
                    <li><a href="cotacao.php"><span class="glyphicon glyphicon-usd"></span> Cotação</a></li>
                    <li><a href="contato.php"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
                </ul>                
            </div>
        </div>
    </nav>
    
    <!-- container principal -->
    
    <div class="container col-md-12">
    
    <div class="panel panel-primary">  
    <div class="panel-body">    
    <!-- slide -->
    <div class="col-md-8 col-md-offset-">    
     
    <figure id="slide">
    <img src="images/slide-1.png">      
    </figure>
    <p id="tranquilidade"> <span class=	"label label-warning"> A sua tranquilidade é a nossa satisfação </span></p>
    </div>    
    </div>
    </div>
                
    <!-- Informação -->
        
    <div class="col-md-5 col-md-offset-1">
    <div id="obrigado">
    <h4> <span class="label label-primary">Bem Vindo</span></h4>
    <p> <span class="label label-warning">Obrigado por visitar nosso site!</span></p>
    
    <p>
    Como empresa moderna, queremos oferecer-lhe tambem On-line todas as informações a respeito de nossa empresa e a
    gama de serviços que temos para lhes oferecer. Um novo sistema de administração de conteúdo nos permitirá
	mante-lo aqui particularmente atualizado sobre os acontecimentos.
    </p>
    </div>
    </div>    
                               
    
    <div class="col-md-12 col-md-offset-6">
    <figure id="social_f">
    
    <p><span class="label label-primary"><span class="glyphicon glyphicon-thumbs-up"></span> Siga-nos também nas principais redes sociais!</span></p>
    <a href="http://facebook.com"><img src="images/social_f.png"></a>
    <a href="http://twitter.com"><img src="images/social_t.png"></a>
    
    </figure>
    </div>
    
    <?php 
    include("footer.php")
    ?>
    
    </div>
    
    <script src="js/index.js"></script>
    
</body>
</html>