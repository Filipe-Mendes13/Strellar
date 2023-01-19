<?php


///////////////////////////////////////////////////////////////////////////////////////////////////
//                                 
//     inserir dados ao banco de dados  servidor externo sql utilizando php metodo POST
//     Cliente : Fiat SCA.
//     Programador Filipe Mendes
//     modificado: 26/05/2022
//     status funcionando
///////////////////////////////////////////////////////////////////////////////////////////////////

ini_set('display_errors', 0 );
error_reporting(0);

ini_set('default_charset','UTF-8');
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('America/Sao_Paulo');


$valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"]; 
        $valor3 = $_POST["valor3"];
            $valor4 = $_POST["valor4"]; 
                $valor5 = $_POST["valor5"];
                    $valor6 = $_POST["valor6"];
                    

require_once('conexao.php');


$sql = ("INSERT INTO `THEWALL`(`Pergunta`, `PrimeiraAlternativa`, `SegundaAlternativa`, `TerceiraAlternativa`, `QuartaAlternativa`, `AlternativaCorreta`) VALUES ('$valor1','$valor2','$valor3','$valor4','$valor5','$valor6')");

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