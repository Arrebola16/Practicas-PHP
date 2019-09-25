<?php
session_start();

$_SESSION['username'] = $_POST ['user'];
$_SESSION['userpass'] = $_POST ['pass'];
$_SESSION['userage'] = $_POST ['age'];
$_SESSION['authuser'] = 0;

if (($_SESSION['username'] == 'alejandro')and
    ($_SESSION['userpass'] == '12345')and
    ($_SESSION['userage'] == '19')
    ){
    $_SESSION['authuser'] = 1;
    }
    else {
        echo 'No tienes permisos';
        exit();
    }

?>




<html>
    <head>
        <title>My song site <?php echo $_GET['favsong'];?></title>
    </head>
    <body>
    



<?php
$myfavsong = urlencode ("Demons");
echo "<a href='ArrebolaAlejandroNF2.php?favsong=$myfavsong'>";
echo "Bienvenido a la pagina,";
echo $_COOKIE["username"];
echo $_SESSION["username"];
echo "! <br/>";

?>
<?php

$nombre_usuario = $_GET['user'] ?? 'nadie';
$nombre_usuario = $_GET['user'] ?? $_POST['user'] ?? 'nadie';
echo $nombre_usuario;
 
?>

    </body>
</html>