<?php

include '../config.php';

class Dao{
	
	private $pdo;
	
	public function checkHoraDia($_horaDia)
	{
		$statement = $this->pdo->prepare("select id from historico where hora_dia = :hora_dia");
		$statement->execute(array(':hora_dia' => $_horaDia));
		$count =  $statement->rowCount();
		return $count;
		
	}	
	
	
	public function update($obj)
	{
		
		$sql = "UPDATE  historico SET 
						data_registro = :data_registro, 
						str_dia_semana = :str_dia_semana, 
					    cod_praia = :	cod_praia,  
						hora_dia = :hora_dia,  
						hora = :hora,  
						
						periodo_s = :periodo_s,
                        tamanho_m = :tamanho_m,
						direcao   = :direcao,
						vento_km_h = :vento_km_h,
						direcao_2  =: direcao_2
						
						
            WHERE hora_dia = :hora_dia";
		
		$stmt = $this->pdo->prepare($sql);
		
		$stmt->bindParam(':data_registro', 	$obj->data_registro);       
		$stmt->bindParam(':str_dia_semana', $obj->dia);    
		$stmt->bindParam(':cod_praia',$obj->cod_praia);
		$stmt->bindParam(':hora_dia',$obj->hora_dia); 
		$stmt->bindParam(':hora',$obj->hora);   
		$stmt->bindParam(':periodo_s', $obj->periodo);
        $stmt->bindParam(':tamanho_m', $obj->tamanho);	
		$stmt->bindParam(':direcao', $obj->direcao);
	    $stmt->bindParam(':vento_km_h', $obj->vento);
		$stmt->bindParam(':direcao_2', $obj->direcao_2);

		
		
		$stmt->execute(); 
		
	}
	
	public function insert($obj)
	{
		
			$sql = "INSERT INTO historico(
		                data_registro ,
						str_dia_semana,
                        str_estado,
						str_cidade,						
					    str_praia,  
						hora_dia,  
						hora,
						periodo_s,
                        tamanho_m,
						direcao,
						vento_km_h,
						direcao_2) 
						
				VALUES (
							:data_registro ,
							:str_dia_semana, 
							:str_estado,
							:str_cidade,
							:str_praia,							
							:hora_dia,  
							:hora,
							:periodo_s,
							:tamanho_m,
							:direcao,
							:vento_km_h,
							:direcao_2
						)";
											  
		$stmt = $this->pdo->prepare($sql);
												  
		$stmt->bindParam(':data_registro', 	$obj->data_registro);       
		$stmt->bindParam(':str_dia_semana', $obj->dia);    
		$stmt->bindParam(':str_estado',$obj->str_estado);
		$stmt->bindParam(':str_cidade',$obj->str_cidade);
		$stmt->bindParam(':str_praia',$obj->str_praia);
		
		
		$stmt->bindParam(':hora_dia',$obj->hora_dia);
        $stmt->bindParam(':hora',$obj->hora);  		
		$stmt->bindParam(':periodo_s', $obj->periodo);
        $stmt->bindParam(':tamanho_m', $obj->tamanho);	
		$stmt->bindParam(':direcao', $obj->direcao);
	    $stmt->bindParam(':vento_km_h', $obj->vento);
		$stmt->bindParam(':direcao_2', $obj->direcao_2);	
	

			

			
		$stmt->execute(); 
		
	}
	
	
	public function getDados()
	{
		$sth = $this->pdo->query("SELECT * FROM historico");
        $result = $sth->fetchAll();
		
		return $result;
	}
	
	   function  __construct()
	{
		$this->pdo = Database::conexao();
	
		
	}

	
} 