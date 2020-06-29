<?php require_once("topo.php");
require_once("banco-produto.php"); 

?>
<head>
          <style>
            .linhaComTexto {
  width: 100%;
  height: 20px;
  border-bottom: 1px solid black;
  text-align: center;
}
.linhaComTexto > span {
  font-size: 20px;
  background-color: #F3F5F6;
  padding: 0 10px;
}
        </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <img src="banner-feminino.jpg" class="img-fluid d" > <br>  <br> 

        </div> 
<div class="linhaComTexto">
  <span>MODA FEMININA</span>
</div>
        <br>
<div class="card-deck">
  <div class="card">
      <img class="card-img-top" src="moda-feminina.png" alt="Imagem de capa do card">
    <div class="card-body" >
      <div class="card-header">TREINE EM CASA </div> 
      <p class="card-text"> <br>Confira agora incríveis peças para treino em casa. ATÉ 50% OFF <br>  <br><a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a>
    </div> 
    <div class="card-footer">
      <small class="text-muted">Atualizado a 3 minutos atrás</small>
    </div>
  </div>
    <div class="card">
        <img class="card-img-top" src="moda-feminina2.png"  alt="Imagem de capa do card">
    <div class="card-body">
      <div class="card-header">SPA DAY EM CASA</div>
      <p class="card-text"> <br> Os melhores produtos para sua pele e cabelo. ATÉ 80% OFF <br> <br> <a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Atualizado a 10 minutos atrás</small>
    </div>
  </div>
  <div class="card">
      <img class="card-img-top" src="moda-feminina3.png" alt="Imagem de capa do card">
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

    <br>       
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="blusa.png" alt="Imagem de capa do card">
    <div class="card-body" >
      <div class="card-header">TREINE EM CASA </div> 
      <p class="card-text"> <br>Confira agora incríveis peças para treino em casa. ATÉ 50% OFF <br>  <br><a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a>
    </div> 
    <div class="card-footer">
      <small class="text-muted">Atualizado a 3 minutos atrás</small>
    </div>
  </div>
     <div class="card">
    <img class="card-img-top" src="blusa2.png" alt="Imagem de capa do card">
    <div class="card-body" >
      <div class="card-header">TREINE EM CASA </div> 
      <p class="card-text"> <br>Confira agora incríveis peças para treino em casa. ATÉ 50% OFF <br>  <br><a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a>
    </div> 
    <div class="card-footer">
      <small class="text-muted">Atualizado a 3 minutos atrás</small>
    </div>
  </div>
 
    </body>
    
    <table class="table table-striped table-bordered">

    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto) :
    ?>
        
            <div class="card">
        <img class="card-img-top" src="vestido.png" alt="Imagem de capa do card">
    <div class="card-body" >
        <div class="card-header"><?= $produto['nome'] ?></div>         <p class="card-text"> <br> R$ <?= $produto['preco'] ?> <?= substr($produto['descricao'], 0, 40) ?>
            <br>  <br><a href="#" role="button" class="btn btn-outline-primary">COMPRAR</a> 
      
    </div> 
    <div class="card-footer">
      <small class="text-muted">Atualizado a 3 minutos atrás</small>
    </div>
  </div>
        
    <?php
        endforeach
    ?>
</table>
</html>

<?php require_once("rodape.php"); ?>

