<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css"  href="estilo.css" />
    <?php
      session_start();
      if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
      {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:login.php');
      }
      
      $logado = $_SESSION['login'];
    ?>
    <meta charset="utf-8">
    <title>SISTEMA WEB</title>
  </head>
  
  <body>

<nav id="menu">
  <ul>
    <li><a href="formInsert.html">formInsert</a></li>
    <li><a href="menu.php">menu</a></li>
    <li><a href="login.php">login</a></li>
    <li><a href="pagina.php">pagina</a></li>
  </ul>
</nav><br><br>

    <?php
      echo" Bem vindo $logado"."<br>";
    ?>
    <?php
      print_r($_SESSION);
    ?>
    <br>
    <a href="logout.php"><button>Sair</button></a>
  </body>
</html>