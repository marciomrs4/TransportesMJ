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
                    <li><a href="servicos.php"><span class="glyphicon glyphicon-cog"></span> Serviços</a></li>
                    <li><a href="nossosclientes.php"><span class="glyphicon glyphicon-user"></span> Nossos Clientes</a></li>
                    <li><a href="cotacao.php"><span class="glyphicon glyphicon-usd"></span> Cotação</a></li>
                    <li class="active"><a href="contato.php"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
                </ul>                
            </div>
        </div>
    </nav>
    
    <div class="container col-md-12">       
   
    
        
    <div class="col-md-5 col-md-offset-1">
    <h4 id="atendimento"> <span class="label label-primary">CENTRAL DE ATENDIMENTO</span></h4>
    <p id="infos">Telefone: 11-3714-2540<br>
    Fax: 11-3714-8634<br>
    Nextel ID: 111*94106<br>
    Emergência: 11-8632-8861 (Neide)    
    </p>
    
    <h4 id="endereco"> <span class="label label-primary">NOSSO ENDEREÇO</span></h4>
    <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6771122275577!2d-46.75164489999996!3d-23.54411299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceff53c92ce8e7%3A0x32ef50c1468da48e!2sAv.+Pres.+Altino%2C+1358+-+Jaguare%2C+S%C3%A3o+Paulo+-+SP%2C+05323-002!5e0!3m2!1spt-BR!2sbr!4v1407177743748" width="600" height="450" frameborder="0" style="border:0"></iframe>
    </div>               
    
    
    <div class="col-md-5 col-md-offset-">
    <h4 id="contato"> <span class="label label-primary">ENTRE EM CONTATO</span></h4>
    <br>
    <form id="form">
                                   
        <div class="form-group">
            <label for="inputEmail">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome" required>
        </div>
        
        <div class="form-group">
            <label for="inputPassword">Telefone</label>
            <input type="text" class="form-control" id="telefone" placeholder="DDD + Número" required>
        </div>
        
        <div class="form-group">
            <label for="inputPassword">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="email@exemplo.com">
        </div>
        
        <div class="form-group">
            <label for="inputPassword">Assunto</label>
            <input type="text" class="form-control" id="assunto" placeholder="Assunto">
        </div>
        
        <div class="form-group">
            <label for="inputPassword">Mensagem</label>
            <textarea class="form-control" id="mensagem" rows="8" required></textarea>
        </div>
        
        <button type="reset" class="btn btn-primary"><span class="glyphicon glyphicon-remove"></span> Limpar</button>
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span> Enviar</button>
        
 
        
    </form>
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
