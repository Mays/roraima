<?php

/**
 * Subclass for representing a row from the 'cpsoltrasla'.
 *
 *
 *
 * @package    Roraima
 * @subpackage lib.model
 * @author     $Author:lhernandez $ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id:Cpsoltrasla.php 35042 2009-11-26 01:33:34Z lhernandez $
 * 
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class Cpsoltrasla extends BaseCpsoltrasla
{
  public function getRefmov()
  {
    return self::getReftra();
  }
}
