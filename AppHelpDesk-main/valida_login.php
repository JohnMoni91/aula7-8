<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Help</title>
</head>
<body>
<?php
$usuario_autentic=false; //Colocando o string falso, ele não será utilizado.
$usuarios_app=array( //Aqui salvamos os dados dos clientes.
array(
    "email" => "13dds@gmail.com",
    "password" => "1234"
),

array(
    "email" => "luisoujpof@gmail.com",
    "password" => "12345"
    )   

);
foreach($usuarios_app as $user) { //Aqui verificamos os dados dos clientes
    if($user["email"]==$_POST["email"] && $user["password"]==$_POST["password"]) {
        $usuario_autentic=true;

    }
}

if($usuario_autentic) { //Caso o cliente já é cadastrado no site, ele dará o aviso de confirmação
    echo "Usuario Autenticado";

} else { //Caso contrário, ele irá mandar uma outra mensagem  
    echo "Usuario não encontrado!";
}

;
?>
</body>
</html>