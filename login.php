<?php
	session_start();
	include("connection.php");
	@$login=$_REQUEST["login"];
  @$senha=$_REQUEST["senha"];
  @$acao =$_POST["acao"];
  @$produto=$_SESSION["prod"];

	
	

if($acao =="entrar"){
  @$consulta = mysqli_query($con, "select * from userscli where login = '$login'");
  @$dados = mysqli_fetch_array($consulta);
	if($login == $dados["login"] and $senha==$dados["senha"]){
		$_SESSION["login"]=$login;
    $_SESSION["senha"]=$senha;
    if (empty($produto)) {
      header("location:index.php");
    }else{
      header("location:pgproduto.php");
    }
		
	}else{
    @$consulta = mysqli_query($con, "select * from usersvend where login = '$login'");
	  @$dados = mysqli_fetch_array($consulta);
    if($login == $dados["login"] and $senha==$dados["senha"]){
      $_SESSION["login"]=$login;
      $_SESSION["senha"]=$senha;
      $_SESSION["id_vend"]=$dados["id"];	
      header("location:cadprod.php");
    }else{
      $erro='<p style="color: #FF2A2A"> Login ou senha incorretos </p>';
    }
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Mensa Seminterrata | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./style2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body background="fundo.jpg">
<!-- Link css -->
<link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>

<!-- Jundiaí Shopping -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script  src="./script.js"></script>


<!-- Abinha Bonitinha -->
<header class="main_h">

  <div class="logo"><img src="logo3.png" width="390%" style="margin-left:80%;"/></div>
  <center>

  <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php" style="color:#F1D076;">INÍCIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vinhos.php" style="color:#F1D076">VINHOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cervejas.php" style="color:#F1D076">CERVEJAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="espumantes.php" style="color:#F1D076">ESPUMANTES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">DESTILADOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sobre.php" style="color:#F1D076">SOBRE NÓS</a>
  </li>
</ul>
</center>

</header>

    <!-- Logão -->
    <center>
      <div class="hero">
          <img src="logo3.png" width="25%"/>
      
      <br><br>
      
      <div class="hero2">
        <br>
        <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php" style="color:#F1D076;">INÍCIO</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="vinhos.php" style="color:#F1D076">VINHOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="cervejas.php" style="color:#F1D076">CERVEJAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="espumantes.php" style="color:#F1D076">ESPUMANTES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="Destilados.php" style="color:#F1D076">DESTILADOS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color:#F1D076">•</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sobre.php" style="color:#F1D076">SOBRE NÓS</a>
  </li>
</ul>
      <br>
      </div>
      </div>
      </center>
<br><br>

<!-- Corpo -->


<center>
  <form action="login.php" method="POST">
  <?php 
  if($acao =="entrar"){
  if($login !== $dados["login"] or $senha !==$dados["senha"]){
    echo '<p style="color: #FF2A2A"> Login ou senha incorretos </p>';};
   
  }?>
  <div class="shadow-lg p-3 mb-5 bg rounded" style="background:rgb(255, 255, 255) ;width: 30%;">
  <img src="login.png" width="50%">
  <hr style=" width: 50%; margin: 3%; background: #EBC854">
  <br>

  <div class="input-group mb-3" style="width: 70%;">
    <input style="border-color: #DDB33B" name="login" type="text" class="form-control" placeholder="Login" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group mb-3" style="width: 70%;">
    <input style="border-color: #DDB33B" name="senha" type="password" class="form-control" placeholder="Senha" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <br>
    
    <button type="submit" onMouseOver="style.backgroundColor ='#EBC854'; style.borderColor ='#EBC854'" onMouseOut="style.backgroundColor ='#fff'; style.borderColor ='#DDB33B'" style="border-color: #DDB33B; margin-bottom: 2%; width: 90px" type="button" name="acao" value="entrar" class="btn btn-outline-secondary">Entrar</button>
  
    <br><br>
    <p style="color: #DDB33B">É Novo Aqui? </p>
    <a href="cadastro.php" style="color: #DDB33B"> Registre-se como cliente!</a><br>
    <a href="cadvend.php" style="color: #DDB33B"> Registre-se como vendedor!</a>

  </div>
  </form>
  </center>
</body>
</html>




