<?php
header("Content-Type: application/json;charset=utf-8");

include './lib/conection/Database.php'; 

$parametros = array_slice(explode("/",$_SERVER['REQUEST_URI']), 2);

//$parametro_validacao =  array_map(function($array){ return empty($array)? false: true; }, $parametros));

if(count($parametros) < 3 )
{
	echo  json_encode(array("Messagem"=>"Erro ao informar os parametros" ));
      header('HTTP/1.1 500 Internal Server Error');
	exit(0);
}



$dao = Database::conexao();

$query = "SELECT 	  id,
					  hora,
					  data_registro as data_registro,
					  str_dia_semana,
					  str_estado,
					  str_cidade,
					  str_praia,
					  hora_dia,
					  periodo_s,
					  tamanho_m,
					  direcao,
					  vento_km_h,
					  direcao_2 FROM historico";
					  
$query .=" where 	LOWER(str_estado) = LOWER('".$parametros[0] ."')";
$query .=" and 		LOWER(str_cidade) = LOWER('".$parametros[1] ."')";
$query .=" and 		LOWER(str_praia) = LOWER('".$parametros[2] ."')";
$query  .=" ORDER BY hora ";					  
$sth = $dao->query($query);

  
  
  $result = $sth->fetchAll(PDO::FETCH_OBJ);
		
 
 if(empty($result))
{
	 echo  json_encode(array("Messagem"=>"A regiao ainda nao foi cadastrada" ));
      header('HTTP/1.1 500 Internal Server Error');
	exit(0);
}
	 



echo json_encode($result);

