<?php
session_start();

/* CONTRASEÑA */
$PASSWORD = "incorea1234";

/* LOGIN */
if(isset($_POST['clave'])){

    if($_POST['clave'] === $PASSWORD){

        $_SESSION['login'] = "ok";

        header("Location: index.php");
        exit();

    }else{

        $error = "Contraseña incorrecta";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>INCOREA LOGIN</title>

<style>

body{
    margin:0;
    padding:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:Arial;
    background:#0f1f2f;
}

.login-box{
    width:350px;
    padding:40px;
    background:#13283d;
    border:2px solid #12d6c5;
    border-radius:20px;
    text-align:center;
    box-shadow:0 0 20px rgba(18,214,197,0.4);
}

h2{
    color:white;
    margin-bottom:30px;
}

input{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    margin-bottom:20px;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:14px;
    border:none;
    border-radius:10px;
    background:#12d6c5;
    font-weight:bold;
    cursor:pointer;
}

p{
    color:red;
}

</style>

</head>

<body>

<div class="login-box">

<h2>ACCESO PRIVADO</h2>

<form method="POST">

<input type="password" name="clave" placeholder="Ingrese contraseña">

<button type="submit">INGRESAR</button>

</form>

<p>
<?php
if(isset($error)){
    echo $error;
}
?>
</p>

</div>

</body>
</html>
