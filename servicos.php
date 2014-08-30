<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width">
<title>..:: M.J Transportes e Logistica ::..</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
                <a class="navbar-brand" href="index.php">M.J Transportes e Logistica</a>
            </div>
            <!-- Menu de navegação -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="quemsomos.php"><span class="glyphicon glyphicon-road"></span> Quem Somos</a></li>
                    <li class="active"><a href="servicos.php"><span class="glyphicon glyphicon-cog"></span> Serviços</a></li>
                    <li><a href="nossosclientes.php"><span class="glyphicon glyphicon-user"></span> Nossos Clientes</a></li>
                    <li><a href="cotacao.php"><span class="glyphicon glyphicon-usd"></span> Cotação</a></li>
                    <li><a href="contato.php"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
                </ul>                
            </div>
        </div>
    </nav>
    
    <div class="container col-md-12">
    
    <div class="col-md-4 col-md-offset-1">
    <figure id="log">
    <img src="images/serv_logistica.jpg">     
    </figure>
    </div>
    
    <div class="col-md-6 col-md-offset">
    <div id="logistica">
    <h3 id="log_trans"> <span class="label label-primary">Logística</span></h3>
    <p>A logística trata de todas as atividades de movimentacao e armazenagens, que facilitam o fluxo dos produtos desde
     o ponto de origem ate o seu ponto de destino final, assim como dos fluxos de informacao que colocam os produtos em movimento, 
     com o proposito de providenciar niveis de serviço adequados aos clientes a um custo razoavel. 
     A M.J Transportes e logística disponibiliza a logística, na recepção de diversos produtos, sensiveis e outros, 
     transportando, entregando ou armazenando. Com frota moderna e equipe especializada a cada situação de serviço. 
     Transportamos e entregamos seus bens nos mais distintos lugares do território nacional.</p>
    </div>
    </div>
    
    <div class="col-md-4 col-md-offset-1">
    <figure id="log">
    <img src="images/serv_transporte.jpg">     
    </figure>
    </div>
    
    <div class="col-md-6 col-md-offset">
    <div id="logistica">
    <h3 id="log_trans"> <span class="label label-primary">Transporte</span></h3>
    <p>
    <strong>Transporte Fraccionados:</strong> Atuamos em todo o território nacional através de grandes parceiros, 
    tendo o comprometimento e responsabilidade de rastreamento e informação desde a coleta ate a entrega final. 
    Transporte Exclusivo: Coletamos e entregamos o seu material em todo o território nacional com carro exclusivo e respeitando
    a sua nessecidade. Distribuição: Entregas urbanas com veículos adequados e cumprindo as exigencias da nova legislação de trânsito.
    Veículo Dedicado: Locamos todo e qualquer tipo de veículo para pronto atendimento ficando a sua disposição.
    </p>
    </div>
    </div>
    
    <div class="col-md-4 col-md-offset-1">
    <figure id="log">
    <img src="images/serv_aereo.jpg">     
    </figure>
    </div>
    
    <div class="col-md-4 col-md-offset-1">
    <figure id="log">
    <img src="images/serv_especiais.jpg">     
    </figure>
    </div>
    
    <div class="col-md-5 col-md-offset-1">
    <div id="logistica">
    <h3 id="log_trans"> <span class="label label-primary">Aéreo</span></h3>
    <p> 
    <strong>Transporte Aéreo:</strong> Somos correntista com as principais Cias aéreas como Gol, Variglog, Tam, Ocean Air e Skymaster.
     Contamos com representantes em todas as capitais e maiores cidades do país.  
    </p>
    </div>
    </div>
    
    
    
    <div class="col-md-5 col-md-offset-">
    <div id="logistica">
    <h3 id="log_trans"> <span class="label label-primary">Serviços Especiais</span></h3>
    <p> 
    <strong>Serviços de Paletização:</strong> Paletizamos a estrechamos sua mercadoria para entrega nos grandes magazines 
    conforme exigencias padronizadas e respeitando o agendamento. Montagens de kit: 
    Montamos, embalamos e entregamos kits promocionais. Entregas Especiais: Manuseio de materiais sensíveis e içamentos. 
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
    </body>
    </html>