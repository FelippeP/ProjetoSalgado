<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>

<html>

<head>

    <link rel="stylesheet" type="text/css" href="style.css" />
    </style>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

    <body>
        <div class="navbar navbar-inverse navbar-fixed-top">

            <div class="container">
                <div class="navbar-header">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-warning">HOME</a>
                    </div>
                    <a href="pagina-feminina.php" class="btn btn-outline-dark">VESTUÁRIO </a>
                    <a href="mais-vendidos.php" class="btn btn-outline-danger">MAIS VENDIDOS</a>
                    <a href="produto-formulario.php" class="btn btn-outline-warning">ADICIONAR PRODUTOS</a>
                    <a href="produto-lista.php" class="btn btn-outline-warning">PRODUTOS CADASTRADOS</a>

                    </ul>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="principal">
    </body>
    <?php
    mostraAlerta("success");
    mostraAlerta("danger");
    ?>