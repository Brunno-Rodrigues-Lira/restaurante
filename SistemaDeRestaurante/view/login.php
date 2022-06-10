<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Login</title>
    <style type="text/css">
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
  margin-top: 20px;
  justify-content: center;
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
}


.container {
    background: rgba(58, 61, 59, 0.144);
    margin: 0 auto;
    width: 600px;
    margin-top: 100px;
    border-radius:40px;
    box-shadow:10px;
    padding-right: 10px;
    border: 2px solid #ffffff40 ;
    backdrop-filter: blur(5px) ;
    
}

.link{
    color: white;
    font-size: 13px;
    margin-left:50px;
}

.nomes{
    font-weight: bold;
    color: #ffffff95;
    margin-left: 50px;
}



    </style>

</head>
<body>
   
    <div class="container">
  
  <div class="nomes">
      
  
 <h1  class="text-center">Login</h1>
        <div class="row">
            
            <div class="col">
           
            <label >Email</label>
              <input type="text" class="form-control" placeholder="exp@gmail.com" >
             <label>Senha</label>
              <input type="password" class="form-control" placeholder=".....">
          
            </div>
            
          </div>
          </div>

        <div class="row">
            

            <div class="col">
                <a href="#top" class="link">
                    <label>Esqueceu a Senha</label>
                </a>
            </div>
        </div>
     
        <div class="row">
          
        
           <div class="botao">

       
                <input type="submit" class="btn btn-success" value="Entrar" style="margin: 10%;" >
            
            </div>
          

            
            
        
        </div>
           

        
       
    </div>

    

    <script src="js/bootstrap.min.js"> </script>
</body>
</html>