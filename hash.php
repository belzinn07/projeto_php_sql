<?php   //Aqui é o arquivo da criptografia da senha
include("conexao.php");
function gerarhash($senha){
    $hash= password_hash($senha, PASSWORD_DEFAULT);
    return $hash;
}

?>