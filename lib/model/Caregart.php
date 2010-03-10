<?php

/**
 * Subclass for representing a row from the 'caregart'.
 *
 *
 *
 * @package    Roraima
 * @subpackage lib.model
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id$
 * 
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class Caregart extends BaseCaregart
{
  protected $ubicacion = '';
  protected $gencorart="";
  protected $tiedatrel="";

public function getNomram($val=false)
	{
		return Herramientas::getX('RAMART','Caramart','Nomram',self::getRamart());
	}


public function getDisponibilidad($val=false)
  {
	$filtros=array('CODART','CODALM');//arreglo donde mando los filtros de las clases
	$variables=array(self::getCodart(),self::getCodalm());//arreglo donde mando los parametros de la funcion
  	return $destipact= Herramientas::getXx('CAARTALM',$filtros,$variables,'Destipact');
  }

    public function getDessnc()
	{
		return Herramientas::getX('CODSNC','Cacatsnc','Dessnc',self::getCodartsnc());
	}

public function getNompar()
	{
		return Herramientas::getX('CODPAR','Nppartidas','Nompar',self::getCodpar());
	}

	public function getGencorart()
    {
      $d= new Criteria();
      $data=CadefartPeer::doSelectOne($d);
      if ($data)
      {
      	$si=$data->getGencorart();
      }else $si=null;
      return $si;
    }

  public function getTiedatrel()
  {
  	$valor="N";
  	if (self::getId()){
  	  $d= new Criteria();
  	  $d->add(CaartsolPeer::CODART,self::getCodart());
  	  $resul= CaartsolPeer::doSelectOne($d);
  	  if ($resul)
  	  {
  	  	$valor= 'S';
  	  }else {
  	  $d= new Criteria();
  	  $d->add(CaartordPeer::CODART,self::getCodart());
  	  $resul= CaartordPeer::doSelectOne($d);
  	  if ($resul)
  	  {
  	  	$valor= 'S';
  	  }else $valor= 'N';
  	  }
  	}


  	return $valor;
  }

  public function setTiedatrel()
  {
  	return $this->tiedatrel;
  }
}
