  <?php


	
	include_once('../controller/conexao.php');

	$sql = "SELECT * FROM gerentes";

	$dados = mysqli_query($conexao, $sql);



?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Listagem de Gerentes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <style>
    </style>
  </head>
  <body >
       
        <?php

            if (isset( $_POST['gerente'] ) ) {
            $gerente= $_POST['gerente'];
            } else {
            $gerente= '';
            }

            include "conexão.php";

            $sql= "select * from gerente where nome like bolsa";
            $dados = mysqli_query($conexao, $sql);

         ?>

         
      <div class="container">
          <h1 class="text-center">Listagem de Gerentes</h1>
          <nav class="navbar navbar-ligth bg-ligth">
            <form class="form-inline" action="listagem_gerente.php">
              <input class="form-control mr-sm 2" type="search" placeholder="nome" aria-label="search" name="gerente">
              <button class="btn btn-outline-sucess my-2 my-sm-0" type="submit">buscar</button>

            </form>

          <table class="table">
              <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Endereço</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
              </thead>
              <tbody class="table-light">
              <?php

                         while ($linha = mysqli_fetch_assoc($dados) ) {
                              $nome = $linha['nome'];
                              $endereço = $linha['endereco'];
                              $email = $linha['email'];
                              $telefone = $linha['telefone'];
                              $rg= $linha['rg'];
                              $cpf= $linha['cpf'];
    
                      echo "<tr> 
                                <td>$nome</td> 
                                <td>$endereço</td>
                                <td>$email</td>
                                <td>$telefone</td>
                                <td>$rg</td>
                                <td>$cpf</td>
                                <td>
										<i class='bi-pencil'></i>
										<i class='bi-trash' ></i>
									</td>
                            </tr>";
}

?>
            
          </table>
          <a class="btn btn-dark" href="javascript:history.back()">Voltar</a>
      </div>
    <script src="js/bootstrap.min.js"> </script>
  </body>
</html>
