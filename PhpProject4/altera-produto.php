  <?php require_once("topo.php");
      require_once("banco-produto.php"); ?>

<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];

if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id)) { ?>
    <p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> alterado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $nome; ?> não foi alterado: <?= $msg ?></p>
<?php
}
?>

<?php require_once("rodape.php"); ?>
