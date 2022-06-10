<?php
  
    include_once('../controller/conexao.php');

    
    if ( isset($_POST['submit'] ) ) {
        
        $nome = $_POST['nome'];
        $datanascimento = $_POST['dataNascimento'];
        $telefone = $_POST['telefone'];
        $endereço = $_POST['endereço'];
        $grauescolaridade = $_POST['grauescolar'];
        $cpf = $_POST ['cpf'];
        
        $sql = "INSERT INTO garcons
                    ( nome, datadenascimento, telefone, endereco, graudeescolaridade, cpf)
                VALUES 
                    ('$nome', '$datanascimento', $telefone, '$endereço', '$grauescolaridade', $cpf)";

              $resultado = mysqli_query($conexao, $sql);

                if ($resultado) {
                 mensagem("$nome cadastrado com sucesso!", "success");
                 } else {
              mensagem("não foi possível cadastrar o garcom $nome", 'danger');
             }
            }



        ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastrar Garçom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

.form-select {
  background: rgba(71, 78, 73, 0.171) ;
border: 2px solid #c4b4b430 ;
width:  90%;
height: 50px;
margin-top: 10px;
backdrop-filter: blur(3px);
font-weight: bold;
color: #ffffff95;
}

option {
  color: black;
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
<body>
    

<div class="container">
  <div class="nomes">
<h1 class="text-center">Cadastro de Garçom</h1>
  <form method="POST" action="cadastro-garcom.php">
  <div class="row">
    <div class="col">
    <label>Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="insira o Nome Completo do Garçom">
</div>
 <div class="col">
<label>Data de Nascimento</label>
<input type="date" class="form-control" name="dataNascimento" placeholder="00/00/0000">
</div>
 </div>
<div class="row">
<div class="col">
<label>Telefone</label>
   <input type="number" class="form-control" name="telefone" placeholder="+00(00)00000-0000">
</div>
 <div class="col">
  <label>Endereço</label>
  <input type="text" class="form-control" name="endereço" placeholder="Insira o Endereço">
 </div>
</div>
<div class="row">
<div class="col">
 <label>CPF</label>
<input type="number" class="form-control" name="cpf" placeholder="000.000.000-00">
</div>
<div class="col">
  <label>Grau De Escolaridade</label>
  <select class="form-select" name= "grauescolar" aria-label="Default select example">
  <option selected>Selecione o Grau de Escolaridade</option>
  <option value="1">Ensino Fundamental Incompleto</option>
  <option value="2">Ensino Fundamental Completo</option>
  <option value="3">Ensino Médio Incompleto</option>
  <option value="4">Ensino Médio Completo</option>
  <option value="5">Ensino Superior Incompleto</option>
  <option value="6">Ensino Superior Completo</option>
</select>
</div>
</div>
<div class="row">
<input type="submit" name="submit" value="Salvar" class="btn btn-sucess"style="margin: 10%;">
</div>
</form>
</div>
</div>
<a href ="listagem-garcons.php" >
<input type="submit" class="link" value="Ir Para Listagem" >
  </body>
  </script>
  <script scr="js/bootstrap.min.js">
       const mensagem = document.querySelector('.mensagem');
        
        if (mensagem) {
            
            setTimeout( function(){ 
                mensagem.classList.add('ocultar');
            }, 3000);

        }
</html>