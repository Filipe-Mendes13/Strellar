<?php


///////////////////////////////////////////////////////////////////////////////////////////////////
//                              
//     inserir dados ao banco de dados  servidor externo sql utilizando php metodo get
//     Cliente : Fiat SCA.
//     Programador Filipe Mendes
//     modificado: 26/05/2022
//     status funcionando
///////////////////////////////////////////////////////////////////////////////////////////////////
ini_set('display_errors', 0 );
error_reporting(0);


require_once('conexao.php');
$valor1 = $_GET["valor1"]; 
$valor2 = $_GET["valor2"];
$valor3 = $_GET["valor3"];


$sql = mysqli_query($con,"SELECT `Nome`,`Score` FROM `THEWALL_RANKING` ORDER BY `Score` DESC LIMIT 10;") or die('Erro');


while($rows=mysqli_fetch_assoc($sql)){
	echo $rows['Nome'];	
	echo "|";
	echo $rows['Score'];
	echo "|";
	
		}
mysqli_query($con,$sql);


$con->close();
?>