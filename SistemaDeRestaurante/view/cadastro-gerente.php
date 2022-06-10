<?php
  
    include_once('../controller/conexao.php');

    
    if ( isset($_POST['submit'] ) ) {
        
        $nome = $_POST['nome'];
        $endereço = $_POST['endereço'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        
        $sql = "INSERT INTO gerentes
        ( nome, endereco, telefone, email, rg, cpf)
    VALUES 
        ('$nome', '$endereço', $telefone, '$email', $rg, $cpf)";

  $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
     mensagem("$nome cadastrado com sucesso!", "success");
     } else {
  mensagem("não foi possível cadastrar o garcom $nome", 'danger');
 }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastrar Gerente</title>
    <style>
     
    h1{
            margin-top: 10px;
            color: white;
            margin-right:55px;
     }
 body {
   height: 100%;  
background:  linear-gradient(
      rgba(53, 56, 54, 0.281),rgba(58, 56, 56, 0.3)),
url(https://servircomrequinte.francobachot.com.br/wp-content/uploads/2018/11/254602-mesas-e-cadeiras-para-restaurante-como-escolher-as-mais-indicadas-e1543433615490.jpg) no-repeat;
; 
}             

input {

width: 200px ; 
}

input.btn{
width: 80%;
height:40px !important;
margin-top: 20px;
justify-content: center;
margin-bottom:45px !important;
text-shadow: 25px;
background: rgb(4,78,14);
background: linear-gradient(90deg, rgba(4,78,14,1) 8%, rgba(14,112,25,1) 38%, rgba(31,108,40,1) 71%, rgba(42,208,65,1) 100%);
}

.form-control {

background: rgba(71, 78, 73, 0.171) ;
border: 2px solid #c4b4b430 ;
width:  90%;
height: 50px;
margin-top: 10px;
backdrop-filter: blur(3px);
font-weight: bold;
color: #ffffff95;
}


.container {
  background: rgba(58, 61, 59, 0.144) ;
  margin: 0 auto;
  width: 600px;
  margin-bottom:100px;
  margin-top: 60px;
  border-radius:40px;
  box-shadow:10px;
  padding-right: 10px;
  border: 2px solid #ffffff40 ;
  backdrop-filter: blur(5px) ;
  
}


.nomes{
  font-weight: bold;
  color: #ffffff95;
  margin-left: 50px;
}

.link {
  position:absolute;
  left: 85%;
  top: 96%;
  border: 0px;
  font-weight: bold;
  color: #ffffffff;
  text-shadow: 5px;
background: rgb(4,78,14);
background: linear-gradient(90deg, rgba(4,78,14,1) 8%, rgba(14,112,25,1) 38%, rgba(31,108,40,1) 71%, rgba(42,208,65,1) 100%);
}
    

    </style>
  </head>
'
  <body>

    <div class="container">
      <div class="nomes">
      <h1 class="text-center"><strong>Cadastro de Gerente</strong></h1>
      <form action="cadastro-gerente.php" method="POST">
        <div class="row"> <!--Linha 1 -->
          <div class="col">
            <label>Nome </label>
            <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
          </div>

          <div class="col">
            <label>Endereço</label>
            <input type="text" name="endereço" class="form-control" placeholder="Informe seu Endereço">
          </div>
        </div>
        <div class="row"> <!--Linha 2 -->
          <div class="col">
            <label>Telefone</label>
            <input type="number" class="form-control" name="telefone" placeholder="(88)99303-2454">
          </div>
          <div class="col">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="EX:er@gmail.com">
          </div>
        </div>
        <div class="row"> <!--Linha 3 -->
          <div class="col">
            <label>RG</label>
            <input type="number" class="form-control" name="rg" placeholder="Informe seu RG">
          </div>
          <div class="col">
            <label>CPF</label>
            <input type="number" class="form-control" name="cpf" placeholder="Informe seu CPF">
          </div>
          </div>
        </div>
        <div class="row"> <!--Linha 4 -->
            <input type="submit" name="submit" class="btn btn-success " value="Salvar"   style="margin: 10%;">  
        </div>
        </form>
    </div>
    <a href ="listagem-gerentes.php" >
<input type="submit" class="link" value="Ir Para Listagem" >
  </body>
  <script src="js/bootstrap.min.js">
       const mensagem = document.querySelector('.mensagem');
        
        if (mensagem) {
            
            setTimeout( function(){ 
                mensagem.classList.add('ocultar');
            }, 3000);

        }
        </script>

  </html>