<?php

/**
 * Subclass for representing a row from the 'cpdocprc'.
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
class Cpdocprc extends BaseCpdocprc
{
  protected $etadef="";

  public function getTipdocpre()
  {
  	return self::getTipprc();
  }

  public function getNomdocpre()
  {
  	return self::getNomext();
  }

  public function getEtadef() {
    $cpdefniv=CpdefnivPeer::doSelectOne(new Criteria());
	if ($cpdefniv){
	   return $cpdefniv->getEtadef();
	 } else return 1;
    }

    public function setEtadef()
    {
        return $this->etadef;
    }

}
