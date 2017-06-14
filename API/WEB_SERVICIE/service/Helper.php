<?php

date_default_timezone_set('America/Sao_Paulo');

class Helper{
	
	public static function  getStrDiaSemana($dia)
	{
		$dias = array("Domingo","Segunda-Feira","Terça-Feira","Quarta-Feira","Quinta-Feira","Sexta-Feira","Sábado");
		
		return ($dias[$dia]) ? $dias[$dia] :"Dia da semana não  informado";
		
		
		
		
	}
	
} 