<?php



///////////////////////////////////////////////////////////////////////////////////////////////////
//                                 
//     inserir pontuação do ranking via POST
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
                        $valor7 = $_POST["valor7"]; 
                            $valor8 = $_POST["valor8"]; 
                                $valor9 = $_POST["valor9"]; 
                                    $valor10 = $_POST["valor10"]; 
                                        $valor11 = $_POST["valor11"];
                                    $valor12 = $_POST["valor12"]; 
                                $valor13 = $_POST["valor13"]; 
                            $valor14 = $_POST["valor14"];
                        $valor15 = $_POST["valor15"]; 
                    $valor16 = $_POST["valor16"]; 
                $valor17 = $_POST["valor17"]; 
            $valor18 = $_POST["valor18"]; 
        $valor19 = $_POST["valor19"];
    $valor20 = $_POST["valor20"];
$valor21 = $_POST["valor21"];
	$valor22 = $_POST["valor22"];
		$valor23 = $_POST["valor23"];
			$registro = '';
				$score = '';
					
			
require_once('conexao.php');


$sql = mysqli_query($con,"SELECT `Registro`, `Score` FROM `THEWALL_RANKING` WHERE `Registro` = '$valor2';") or die('Erro');
// consulta se tem alguma pontuação no ranking

while($rows=mysqli_fetch_assoc($sql)){
    $registro = $rows['Registro'];
	$score = $rows['Score'];	
}


//se não tiver registro faz o insert
if ($registro == ''){
	echo "INSERT";
	$sql = ("INSERT INTO `THEWALL_RANKING`(`Nome`, `Registro`, `Score`, `PerguntaErrada`, `Dominio1`, `PerguntaErrada2`, `Dominio2`, `PerguntaErrada3`, `Dominio3`, `PerguntaErrada4`, `Dominio4`, `PerguntaErrada5`, `Dominio5`, `PerguntaCerta`, `Dominio6`, `PerguntaCerta2`, `Dominio7`, `PerguntaCerta3`, `Dominio8`, `PerguntaCerta4`, `Dominio9`, `PerguntaCerta5`, `Dominio10`) VALUES ('$valor1','$valor2','$valor3','$valor4','$valor5','$valor6','$valor7','$valor8','$valor9','$valor10','$valor11','$valor12','$valor13','$valor14','$valor15','$valor16','$valor17','$valor18','$valor19','$valor20','$valor21','$valor22','$valor23')");
	
	}


//se a pontuação existente for menor que a nova faz update	
if ($registro != '' and $score < $valor3) {
	echo "UPDATE";
$sql =	"UPDATE `THEWALL_RANKING` SET `Nome`='$valor1',`Registro`='$valor2',`Score`='$valor3',`PerguntaErrada`='$valor4',`Dominio1`='$valor5',`PerguntaErrada2`='$valor6',`Dominio2`='$valor7',`PerguntaErrada3`='$valor8',`Dominio3`='$valor9',`PerguntaErrada4`='$valor10',`Dominio4`='$valor11',`PerguntaErrada5`='$valor12',`Dominio5`='$valor13',`PerguntaCerta`='$valor14',`Dominio6`='$valor15',`PerguntaCerta2`='$valor16',`Dominio7`='$valor17',`PerguntaCerta3`='$valor18',`Dominio8`='$valor19',`PerguntaCerta4`='$valor20',`Dominio9`='$valor21',`PerguntaCerta5`='$valor22',`Dominio10`='$valor23' WHERE `Registro` = '$valor2'";
	
    }
	
	
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