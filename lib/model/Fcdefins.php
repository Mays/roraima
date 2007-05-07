<?php

/**
 * Subclass for representing a row from the 'fcdefins' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Fcdefins extends BaseFcdefins
{
	public function getNomemp()
	  {  
	  	  $c = new Criteria();
	  	  $c->add(EmpresaUserPeer::CODEMP,self::getCodemp());
	  	  $nombre = EmpresaUserPeer::doSelectone($c);
		  if ($nombre)
		  	return $nombre->getNomemp();
		  else 
		    return 'No encontrado';  
	  }	
	  
	public function getNomfuep()
	  {
	  	return Herramientas::getX('CODFUE','Fcfuepre','Nomfue',self::getCodpic());
	  }

	public function getNomfuev()
		  {
		  	return Herramientas::getX('CODFUE','Fcfuepre','Nomfue',self::getCodveh());
		  }	  
		  
	public function getNomfuei()
		  {
		  	return Herramientas::getX('CODFUE','Fcfuepre','Nomfue',self::getCodinm());
		  }		 

    public function getNomfuepr()
	  {
	  	return Herramientas::getX('CODFUE','Fcfuepre','Nomfue',self::getCodpro());
	  }

	public function getNomfuee()
		  {
		  	return Herramientas::getX('CODFUE','Fcfuepre','Nomfue',self::getCodesp());
		  }	  
		  
	public function getNomfuea()
		  {
		  	return Herramientas::getX('CODFUE','Fcfuepre','Nomfue',self::getCodapu());
		  }		  
}
