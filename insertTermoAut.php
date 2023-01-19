<?php

///////////////////////////////////////////////////////////////////////////////////////////////////
//                                
//     Insere o termo de autorização via POST
//     Cliente : Fiat SCA.
//     Programador Filipe Mendes
//     modificado: 30/06/2022
//     status funcionando
///////////////////////////////////////////////////////////////////////////////////////////////////


ini_set('display_errors', 0 );
error_reporting(0);

ini_set('default_charset','UTF-8');
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('America/Sao_Paulo');


$valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"]; 
        


require_once('conexao.php');


$sql = mysqli_query($con, "UPDATE `Usuarios_TheWall` SET `PERMISSAO`= '$valor1' WHERE `REGISTRO` = '$valor2'");

$result = mysqli_query($con,$sql);

if (!$result){
	
    echo("Ocorreu um erro ao salvar os dados");
	echo $result;
}
else{
echo ("Dados enviados com sucesso!");

}


//========================================================================================
$con->close();
?>