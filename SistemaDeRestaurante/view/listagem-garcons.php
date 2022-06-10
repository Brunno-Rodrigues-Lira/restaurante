<?php
	
	include_once('../controller/conexao.php');

	$sql = "SELECT * FROM garcons";

	$dados = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Listagem de Garçons</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/front/bootstrap-icons.css">

  </head>
  <body >
    <?php
     
     if (isset($_POST['garcom'])){
       $garcons = $_POST['garcom'];
     } else {
       $garcons = '';
     }

     include 'conexao.php';

     $sql = "SELECT * FROM garcons WHERE nome like '%$garcons%' ";

     $dados = mysqli_query($conexao, $sql);
    ?>
      <div class="container">
          <h1 class="text-center">Listagem de Garçons</h1>

           <nav class="navbar navbar-light bg-light">
               
              <form class="form-inline" method="POST" action="listagem-garcons.php">
                <input type="search" name="garcom" class="form-control mr-sm-2" placeholder="nome" aria-label="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
          
          </nav>

          <table class="table" >
              <thead>
                <tr>
                    <th>Nome completo</th>
                    <th>Data de Nacimento</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Grau de Escolaridade</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
              </thead>
              <tbody class="table-light">
              <?php

                 while ($linha = mysqli_fetch_assoc($dados) ) {
                     $nome = $linha['nome'];
                     $dataNascimento = $linha['datadenascimento'];
                     $Endereço = $linha['endereco'];
                     $Telefone = $linha['telefone'];
                     $GrauEscolaridade = $linha['graudeescolaridade'];
                     $CPF = $linha['cpf'] ;
                     
       echo "              
      <td>$nome</td> 
      <td>$dataNascimento</td>
      <td>$Endereço</td>
      <td>$Telefone</td>
      <td>$GrauEscolaridade</td>
      <td>$CPF</td>
      <td>
										<i class='bi-pencil'></i>
										<i class='bi-trash' ></i>
									</td>
    </tr> ";
}

?>
  
          </table>
          <a class="btn btn-dark" href="javascript:history.back()">Voltar</a>
      </div>
    <script src="js/bootstrap.min.js"> </script>
  </body>
</html>
