<?php

/**
 * inggruprec actions.
 *
 * @package    Roraima
 * @subpackage inggruprec
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id$
 * 
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class inggruprecActions extends autoinggruprecActions
{

   /**
   * Actualiza la informacion que viene de la vista 
   * luego de un get/post en el objeto principal del modelo base del formulario.
   *
   */
  protected function updateIngruprecFromRequest()
	{
		$ingruprec = $this->getRequestParameter('ingruprec');

		if (isset($ingruprec['codgrup']))
	    {
	      $this->ingruprec->setCodgrup(str_pad($ingruprec['codgrup'], 4, '0', STR_PAD_LEFT));
	    }
	    if (isset($ingruprec['desgrup']))
	    {
	      $this->ingruprec->setDesgrup($ingruprec['desgrup']);
	    }
    }

  /**
   * Función para colocar el codigo necesario para 
   * el proceso de guardar.
   * Esta función debe retornar un valor igual a -1 si no hubo 
   * Inconvenientes al guardar, y != de -1 si existe algún error.
   * Si es diferente de -1 el valor devuelto debe ser un código de error
   * Válido que exista en el archivo config/errores.yml
   *
   */
  public function saving($ingruprec)
  {
  	  $sql="select max(id) as num from ingruprec";

      if (Herramientas::BuscarDatos($sql,&$result))
		{
		          	//H::printR ($result);
		          	$ingruprec->setCodgrup((str_pad($result[0]["num"]+1, 4, '0', STR_PAD_LEFT)));
		 }

    return parent::saving($ingruprec);

  }


}
