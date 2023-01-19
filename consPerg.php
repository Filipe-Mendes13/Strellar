<?php


///////////////////////////////////////////////////////////////////////////////////////////////////
//                              
//     Consulta dados ao banco de dados  servidor externo sql utilizando php metodo get
//     Cliente : Fiat SCA.
//	   Programador Filipe Mendes
//     modificado: 26/05/2022
//     status funcionando
///////////////////////////////////////////////////////////////////////////////////////////////////

ini_set('display_errors', 0 );
error_reporting(0);



require_once('conexao.php');
$valor1 = $_GET["valor1"]; 


$sql = mysqli_query($con,"SELECT `Pergunta`, `PrimeiraAlternativa`, `SegundaAlternativa`, `TerceiraAlternativa`, `QuartaAlternativa`, `AlternativaCorreta`, `Dominio` FROM `THEWALL` WHERE ID = '$valor1';") or die('Erro');


while($rows=mysqli_fetch_assoc($sql)){
	echo $rows['Pergunta'];	
	echo "|";
	echo $rows['PrimeiraAlternativa'];
	echo "|";
	echo $rows['SegundaAlternativa'];
	echo "|";
	echo $rows['TerceiraAlternativa'];
	echo "|";
	echo $rows['QuartaAlternativa'];
	echo "|";
	echo $rows['AlternativaCorreta'];
	echo "|";
	echo $rows['CustoUnit'];
	echo "|";
	echo $rows['Dominio'];
	echo "|";
			}
mysqli_query($con,$sql);


$con->close();
?>