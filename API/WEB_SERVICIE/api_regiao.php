<?php
header("Content-Type: application/json;charset=utf-8");

include './lib/conection/Database.php'; 

$parametros = array_slice(explode("/",$_SERVER['REQUEST_URI']), 2);

$rs = (int) count($parametros);


switch ($rs) {
    case 1:
	 if(strtolower($parametros[0]) != 'brasil' ){
		
		echo  json_encode(array("Messagem"=>"Região não cadastrada" ));
		header('HTTP/1.1 500 Internal Server Error');
		exit(0);
		 
		 
	 }
        $query = "SELECT distinct str_estado FROM historico";	
        break;
    case 2:
		$query = "SELECT distinct str_cidade FROM historico";
		$query .="  WHERE 	LOWER(str_estado) = LOWER('".$parametros[1] ."')";	
        break;
    case 3:
		$query = "SELECT distinct str_praia FROM historico";					  
		$query .=" WHERE 	LOWER(str_estado) = LOWER('".$parametros[1] ."')";
		$query .=" AND 		LOWER(str_cidade) = LOWER('".$parametros[2] ."')";
		
		break;
		
    default:
        echo  json_encode(array("Messagem"=>"erro no numero de parametros" ));
      header('HTTP/1.1 500 Internal Server Error');
	exit(0);
}

$dao = Database::conexao();
$sth = $dao->query($query);
$result = $sth->fetchAll(PDO::FETCH_OBJ);
 
 if(empty($result))
{
	 echo  json_encode(array("Messagem"=>"Regiao nao cadastrada" ));
      header('HTTP/1.1 500 Internal Server Error');
	exit(0);
}
	 



echo json_encode($result);

