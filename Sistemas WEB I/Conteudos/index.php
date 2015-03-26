<html>

<head>
<meta charset ="UTF-8">
<center>  <h1> <i> Tudo sobre Desenvolvimento Web </i></h1> </center>

</head>

<title> index </title>
<body>

<form action="https://demo-project-danilodamasceno.c9.io/php/ler.php" method="post">
 <p> Faça seu login:</p>
  E-mail: <input type="text" name="email"><br>
  senha: <input type="password" name="senha"><br>
<br>
<input value="logar" type="submit" > </form>
<input value="cadastrar"  type="submit" onclick="location.href = 'cadlogin.html'">
<input value="Ver usuários"  type="submit" onclick="location.href = 'https://demo-project-danilodamasceno.c9.io/php/ver.php'">


<?php

include_once('menuLateral.php');

?>



</body>

</html>


 