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
                    <li class="active"><a href="cotacao.php"><span class="glyphicon glyphicon-usd"></span> Cotação</a></li>
                    <li><a href="contato.php"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
                </ul>                
            </div>
        </div>
    </nav>
    
    <div class="container col-md-12">
    
    <div class="col-md-8 col-md-offset-4">
    <h3 id="cotacao"> <span class="label label-primary">Faça conosco uma cotação de serviço</span></h3>
    <br>
    <br>
    </div>
    
    <div class="col-md-6 col-md-offset-3">
    <p><span class="label label-warning">Nome: </span></p>
    <input type="text" id="TextInput" class="form-control" placeholder="Nome e Sobrenome" required>
    <br>
    </div>
    
    <div class="col-md-6 col-md-offset-3">
    <p><span class="label label-warning">E-mail: </span></p>
    <input type="text" id="TextInput" class="form-control" placeholder="email@exemplo.com" required>
    <br>
    </div>                  
    
    <div class="col-md-3 col-md-offset-3">    
    
    <div class="form-group">
      <label for="Select"><span class="label label-warning">Tipo de Serviço:</span></label>
      
      <select id="Select" class="form-control">
        <option>Entrega</option>                 
        <option>Coleta</option>                  
        <option>Armazenagem</option>
        <option>Outro</option>
      </select>
      </div>
      <br>
    </div>

    <div class="col-md-3">
    <div class="form-group">
      <label for="TextInput"><span class="label label-warning">Qual material e Quantidade:</span></label>      
      <textarea class="form-control" rows="2"></textarea>              
      </div>            
    </div>
    
    <div class="container-col-md-12"> 
   
    <div class="col-md-3 col-md-offset-3">    
    <div class="form-group">
      <label for="TextInput"><span class="label label-primary">Origem:</span></label>      
      <input type="text" id="TextInput" class="form-control" placeholder="Estado">
      <br>
      <input type="text" id="TextInput" class="form-control" placeholder="Cidade">              
      </div>            
    </div>
    
    <div class="col-md-3 col-md-offset-">    
    <div class="form-group">
      <label for="TextInput"><span class="label label-primary">Destino:</span></label>      
      <input type="text" id="TextInput" class="form-control" placeholder="Estado">
      <br>
      <input type="text" id="TextInput" class="form-control" placeholder="Cidade">  
      <br>
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span> Enviar</button>                     
     </div>                        
    </div>    
    
    </div>    
    
    <div class="col-md-12 col-md-offset-7">
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