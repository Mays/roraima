<?php

/**
 * Subclase para representar una fila de la tabla 'causuuni'.
 *
 *
 *
 * @package    Roraima
 * @subpackage lib.model
 * @author     $ <desarrollo@cidesa.com.ve>
 * @version SVN: $
 *
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class Causuuni extends BaseCausuuni
{
	public function getNomcat()
    {
        return Herramientas::getX('codcat','Npcatpre','nomcat',self::getCodcat());
    }
}
