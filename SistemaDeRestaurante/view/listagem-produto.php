<?php
	
	include_once('../controller/conexao.php');

	$sql = "SELECT * FROM produtos";

	$dados = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Produtos</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    </head>

    <body>
        <?php

            if (isset( $_POST['produto'] ) ) {
            $produto = $_POST['produto'];
            } else {
            $produto = '';
            }

            include "/controller/conexao.php";

            $sql= "SELECT * from produtos where nome like ' $produto ' ";

         ?>




        <div class="container" >
            <h1 class="text-center" >Listagem de Produtos</h1>
            <nav class="navbar navbar-light bg-light">
                <form class=" form-inline" action="listagem_produto.php">
                    <input class="form-control mr-sm 2" name="produto" type="search" placeholder="nome" aria-label="search">
                    <button class= "btn btn-outline-success my-2 my-sm-0" type="submit" > buscar </button>

                </form> 

            <table class="table">

                <thead class="tabela-fundo">
                    
                    <tr>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th>Porção</th>
                        <th>Preço</th>
                        <th>Ações</th>
                    </tr>

                </thead>

                <tbody>
                    <?php
                while ($linha = mysqli_fetch_assoc($dados) ) {
                              $nome = $linha['nome'];
                              $categoria = $linha['categoria'];
                              $porcao = $linha['porcao'];
                              $preco = $linha['preco'];
                      
    
                      echo "<tr> 
                                <td>$nome</td> 
                                <td>$categoria</td>
                                <td>$porcao</td>
                                <td>R$$preco</td>
                                <td>
										<i class='bi-pencil'></i>
										<i class='bi-trash' ></i>
									</td>
                            </tr>";
                }
         ?>
                </tbody>
            </table>
            <a class="btn btn-dark" href="javascript:history.back()">Voltar</a>
        </div>
       <script src="js/bootstrap.min.js" ></script> 
    </body>
    


</html>