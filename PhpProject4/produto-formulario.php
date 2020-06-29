<?php require_once("topo.php");
      require_once("banco-categoria.php");
      require_once("logica-usuario.php");
verificaUsuario();
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$categorias = listaCategorias($conexao);
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
<div class="linhaComTexto">
  <span>Formulário de produto</span>
</div> 
<br> <form action="adiciona-produto.php" method="post">
    <table class="table">

        <?php include("produto-formulario-base.php"); ?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>
<?php require_once('rodape.php')?>

