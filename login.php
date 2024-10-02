<?php
session_start();
if(isset($_GET["logout"])){

    session_destroy();
    session_start();

}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>

    

<H1>LOGIN</H1>


<?php

if(!isset($_SESSION["id_user"]))

    if(isset($_POST["passwd"]) and $_POST["passwd"]== "1234" and $_POST["Usuario"] == "Usuario"){
        $_SESSION["id_user"]=1;
    
    }
    else{
        echo '<form method="post">'
        . '<input name="Usuario" type="text" placeholder="Usuario">'
        . '<input name="passwd" type="password" placeholder="Contraseña">'
        . '<button type="submit" ">Envia contraseña</button>'
        . "</form>"
        . '<div><a href="Registro.php"><button type="register" class="registro" > Registrarse</button>  </a> </div>';
} 
if (isset($_SESSION["id_user"])){

    echo '<img src="https://imagenes.heraldo.es/files/image_1920_1080/uploads/imagenes/2015/06/08/_caracol1_0ec29911.jpg" alt="">';

    echo '<a href="?logout=1">Cerrar sesión</a>';

}
?>

</body>
</html>