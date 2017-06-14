<?php
include '../service/Dao.php';
include '../service/Helper.php';


if(isset($_POST)){
$request =  array_chunk($_POST["valores"],$_POST["numero_horas"]);

$array = array();


$dao = new Dao();

$estado =   $_POST["estado"];
$cidade =	$_POST["cidade"];
$praia  =   $_POST["praia"];

for($i= 0 ; $i< $_POST["numero_horas"]; $i++)
{
	$obj = new stdClass();
	
	$obj->data_registro      =   date('Y-m-d H:i:s');
	$obj->hora_dia           =   $request[0][$i].'-'.date('Ymd-w');
	$obj->dia                =   Helper::getStrDiaSemana(date('w'));
	$obj->hora      		 =   $request[0][$i];
    $obj->periodo   		 =   $request[1][$i];
    $obj->tamanho   		 =	 $request[2][$i];
	$obj->direcao            =	 $request[3][$i];
	$obj->vento              =	 $request[4][$i];
	$obj->direcao_2          =	 $request[5][$i];
	$obj->str_estado         =   $estado;
	$obj->str_cidade         =   $cidade;
	$obj->str_praia          =   $praia;

$dao->insert($obj);	
	array_push($array,$obj);
	

}


	
}


else{

echo json_encode(["mensagem"=>"Nenhum post foi realizado"]); 

}

?>




