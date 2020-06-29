<?php
require_once("logica-usuario.php");
?>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .linhaComTexto {
      width: 100%;
      height: 20px;
      border-bottom: 1px solid black;
      text-align: center;
    }

    .linhaComTexto>span {
      font-size: 20px;
      background-color: #F3F5F6;
      padding: 0 10px;
    }
  </style>
</head>

<?php if (usuarioEstaLogado()) { ?>
  <div class="alert alert-warning" role="alert"> Bem vindo, você está logado como <?= usuarioLogado() ?>. Agora você possui permissões para adicionar, remover e alterar produtos da loja. </div><a class="btn btn-primary" href="logout.php" role="button">Deslogar</a></p>
<?php } else { ?>


  <body>
      <?php require_once("topo.php");?>
       <br><br>
       <center>
      <div id="carouselsite" class="carousel slide mt-5 mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselsite" data-slide-to="0" class="active"></li>
          <li data-target="#carouselsite" data-slide-to="1"></li>
          <li data-target="#carouselsite" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="banner.png" class="img-fluid d">
          </div>
          <div class="carousel-item">
            <img src="detetivepikachu.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="SuckerPunch.png" class="d-block w-100">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>
      </div>
      </center>
    </div>
    <div class="linhaComTexto">
      <span>CONFORTÁVEL EM CASA</span>
    </div>
    <br>
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="esportivos.png" alt="Imagem de capa do card">
        <div class="card-body">
          <div class="card-header">TREINE EM CASA </div>
          <p class="card-text"> <br>Confira agora incríveis peças para treino em casa. ATÉ 50% OFF <br> <br><a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado a 3 minutos atrás</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="spa.png" alt="Imagem de capa do card">
        <div class="card-body">
          <div class="card-header">SPA DAY EM CASA</div>
          <p class="card-text"> <br> Os melhores produtos para sua pele e cabelo. ATÉ 80% OFF <br> <br> <a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado a 10 minutos atrás</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="pijamas.jpg" alt="Imagem de capa do card">
        <div class="card-body">
          <div class="card-header">PIJAMAS </div>
          <p class="card-text"> <br>Confortável com lindos pijamas! ATÉ 30% OFF <br> <BR> <a href="#" role="button" class="btn btn-outline-primary"> COMPRAR</button></a></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado há 1 hora atrás</small>
        </div>
      </div>
    </div>
    <br>

    <center><img src="banner2.png" class="img-fluid d">></center> <br> <br
    <div class="linhaComTexto">
      <span>DIA DOS NAMORADOS</span>
    </div>
    <br>
    <div class="card-deck">
      <div class="card">
        <img class="card-img-top" src="esportivos.png" alt="Imagem de capa do card">
        <div class="card-body">
          <div class="card-header">TREINE EM CASA </div>
          <p class="card-text"> <br>Confira agora incríveis peças para treino em casa. ATÉ 50% OFF <br> <br><a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado a 3 minutos atrás</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="esportivos.png" alt="Imagem de capa do card">
        <div class="card-body">
          <div class="card-header">TREINE EM CASA </div>
          <p class="card-text"> <br>Confira agora incríveis peças para treino em casa. ATÉ 50% OFF <br> <br><a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado a 3 minutos atrás</small>
        </div>
      </div>
      <div class="card">
        <img class="card-img-top" src="esportivos.png" alt="Imagem de capa do card">
        <div class="card-body">
          <div class="card-header">TREINE EM CASA </div>
          <p class="card-text"> <br>Confira agora incríveis peças para treino em casa. ATÉ 50% OFF <br> <br><a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado a 3 minutos atrás</small>
        </div>
      </div>
    </div>

    <?php require_once('rodape.php') ?>
  </body>

  </html>



<?php } ?>