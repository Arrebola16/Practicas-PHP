<?php
session_start();
setcookie("username","alejandro",time()+10);
?>
<html>
  <head>
    <title> Inicia sesion <?php 
    echo $_GET['favsong'];
    ?></title>
    
  </head>
<body>
<form method="post" action="ArrebolaAlejandroNF2sec.php">
    <p>Introduce tu usuario:
        <input type="text" name="user"/>
    </p>
    <p>Introduce tu contrasenya:
        <input type="password" name="pass"/>
    </p>
    <p>Introduce tu edad:
        <input type="text" name="age"/>
    </p>
    <p>
        <input type="submit" name="submit" value="Submit"/>
    </p>
    </form>
    
    <?php
date_default_timezone_set("UTC");
$leapyear = date("L");
echo date("l");

?>
    
    <?php

echo "Mi cancion favorita es ";
echo $_GET ['favsong']; 

 
?>



</body>
</html>
