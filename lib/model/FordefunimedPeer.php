<?php

/**
 * Subclass for performing query and update operations on the 'fordefunimed' table.
 *
 * 
 *
 * @package lib.model
 */ 
class FordefunimedPeer extends BaseFordefunimedPeer
{
	const COLUMNS = 'columns';
	
	public static $columsname = array (
	self::COLUMNS => array (FordefunimedPeer::CODUNIMED => 'Código', FordefunimedPeer::DESUNIMED => 'Descripción'),);
	
	
	static public function getColumName($colum)
	{
		return self::$columsname[self::COLUMNS][$colum];
	}

	static public function getColumsNames()
	{
		return self::$columsname[self::COLUMNS];
	}
	
	
	static public function getArrayFieldsNames()
	{
		$col = self::$columsname[self::COLUMNS];
		$columnas = array();
		foreach($col as $key => $value)
		{
			$punto = strpos($key,'.');
			$tabla = substr($key,0,$punto);
			$campo = substr($key,$punto+1);
			$columnas[] = ucfirst(strtolower($campo));
			
		}
		return $columnas;
	}
	
  public static function getUnidades($codigo)
  {
  	return Herramientas::getX('CODUNIMED','Fordefunimed','Desunimed',str_pad($codigo,3,0,STR_PAD_LEFT));
  }	
	
}
