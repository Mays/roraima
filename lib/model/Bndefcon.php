<?php

/**
 * Subclass for representing a row from the 'bndefcon' table.
 *
 *
 *
 * @package lib.model
 */
class Bndefcon extends BaseBndefcon
{
  public function getDesmue()
  {
    $filtros=array('CODACT','CODMUE');//arreglo donde mando los filtros de las clases
    $variables=array(self::getCodact(),self::getCodmue());//arreglo donde mando los parametros de la funcion
    return $destipact= Herramientas::getXx('Bnregmue',$filtros,$variables,'Desmue');
  }
  public function getDescta()
  {
    return Herramientas::getX('CODCTA','Contabb','Descta',self::getCtadepcar());

  }
  public function getDesctaabo()
  {
    return Herramientas::getX('CODCTA','Contabb','Descta',self::getCtadepabo());
  }
  public function getDesctaajucar()
  {
    return Herramientas::getX('CODCTA','Contabb','Descta',self::getCtaajucar());

  }
  public function getDesctaajuabo()
  {
    return Herramientas::getX('CODCTA','Contabb','Descta',self::getCtaajuabo());

  }
  public function getDesctarevcar()
  {
    return Herramientas::getX('CODCTA','Contabb','Descta',self::getCtarevcar());

  }
  public function getDesctarevabo()
  {
    return Herramientas::getX('CODCTA','Contabb','Descta',self::getCtarevabo());

  }
  public function getDesctapercar()
  {
    return Herramientas::getX('CODCTA','Contabb','Descta',self::getCtapercar());

  }
  public function getDesctaperabo()
  {
    return Herramientas::getX('CODCTA','Contabb','Descta',self::getCtaperabo());
  }
}
