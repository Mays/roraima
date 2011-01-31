<?php

/**
 * preejeglofin actions.
 *
 * @package    Roraima
 * @subpackage preejeglofin
 * @author     $Author$ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id$
 * 
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class preejeglofinActions extends autopreejeglofinActions
{

  // Para incluir funcionalidades al executeEdit()
  /**
   * Función para colocar el codigo necesario en  
   * el proceso de edición.
   * Aquí se pueden buscar datos adicionales que necesite la vista
   * Esta función es parte de la acción executeEdit, que maneja tanto
   * el create como el edit del formulario.
   * Generalmente aqui se debe y puede colocar los llamados a los configGrid
   * Para generar la información de configuración de los grids.
   *
   */
  public function editing()
  {
		//$anoini = substr(Herramientas::getX('codemp','cpdefniv','fecini','001'),0,4);
		//$this->configGrid($anoini,$codpre);

	$this->configGrid();
  }


  /**
   * Esta función permite definir la configuración del grid de datos
   * que contiene el formulario. Esta función debe ser llamada
   * en las acciones, create, edit y handleError para recargar en todo momento
   * los datos del grid.
   *
   */
  public function configGrid($anoinicio='', $codpre='', $reg = array(),$regelim = array())
  {
    if(!count($reg)>0)
    {
      // Aquí va el código para traernos los registros que contendrá el grid
      $reg = array();
      // Aquí va el código para generar arreglo de configuración del grid
      $this->obj = array();
    }
     $this->cpdeftit = $this->getCpdeftitOrCreate();
	 $anoinicio = substr(Herramientas::getX('codemp','cpdefniv','fecini','001'),0,4);

	 $c = new Criteria();
  	 $c->add(CpdisfuefinPeer :: CODPRE, $this->cpdeftit->getCodpre());
	 $this->sql = "to_char(fecdis,'YYYY') = '" . $anoinicio . "'";
     $c->add(CpdisfuefinPeer :: FECDIS, $this->sql, Criteria :: CUSTOM);
	 $reg = CpdisfuefinPeer::doSelect($c);

	 $this->columnas = Herramientas::getConfigGrid(sfConfig::get('sf_app_module_dir').'/preejeglofin/'.sfConfig::get('sf_app_module_config_dir_name').'/grip_movimiento');
	 $this->obj = $this->columnas[0]->getConfig($reg);

	 $this->cpdeftit->setObj($this->obj);
  }

  
  
  
  /**
   *
   * Función que se ejecuta luego los validadores del negocio (validators)
   * Para mayor información vease http://www.symfony-project.org/book/1_0/06-Inside-the-Controller-Layer#chapter_06_validation_and_error_handling_methods
   *
   */
  public function validateEdit()
  {
    $this->coderr =-1;

    // Se deben llamar a las funciones necesarias para cargar los
    // datos de la vista que serán usados en las funciones de validación.
    // Por ejemplo:

    if($this->getRequest()->getMethod() == sfRequest::POST){

      // $this->configGrid();
      // $grid = Herramientas::CargarDatosGrid($this,$this->obj);

      // Aqui van los llamados a los métodos de las clases del
      // negocio para validar los datos.
      // Los resultados de cada llamado deben ser analizados por ejemplo:

      // $resp = Compras::validarAlmajuoc($this->caajuoc,$grid);

       //$resp=Herramientas::ValidarCodigo($valor,$this->tstipmov,$campo);

      // al final $resp es analizada en base al código que retorna
      // Todas las funciones de validación y procesos del negocio
      // deben retornar códigos >= -1. Estos código serám buscados en
      // el archivo errors.yml en la función handleErrorEdit()

      if($this->coderr!=-1){
        return false;
      } else return true;

    }else return true;
  }

  /**
   * Función para actualziar el grid en el post si ocurre un error
   * Se pueden colocar aqui los grids adicionales
   *
   */
  public function updateError()
  {
    $this->configGrid();

    $grid = Herramientas::CargarDatosGrid($this,$this->obj);

    $this->configGrid($grid[0],$grid[1]);

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
  public function saving($clasemodelo)
  {
    return parent::saving($clasemodelo);
  }

  /**
   * Función para colocar el codigo necesario para 
   * el proceso de eliminar.
   * Esta función debe retornar un valor igual a -1 si no hubo 
   * Inconvenientes al guardar, y != de -1 si existe algún error.
   * Si es diferente de -1 el valor devuelto debe ser un código de error
   * Válido que exista en el archivo config/errores.yml
   *
   */
  public function deleting($clasemodelo)
  {
    return parent::deleting($clasemodelo);
  }


  /**
   * Función para procesar _todas_ las funciones Ajax del formulario
   * Cada función esta identificada con el valor de la vista "ajax"
   * el cual traerá el indice de lo que se quiere procesar.
   *
   */
  public function executeAjax()
  {
    $codigo = $this->getRequestParameter('codigo','');
    $ajax   = $this->getRequestParameter('ajax','');
    $codpre = $this->getRequestParameter('codpre','');
    $cajtexmos = $this->getRequestParameter('cajtexmos','');

    switch ($ajax){
      case '1':
		$anoini = substr(Herramientas::getX('codemp','cpdefniv','fecini','001'),0,4);
        $this->cpdeftit  =  $this->getCpdeftitOrCreate();
		$this->configGrid($anoini,$codpre);
		$output = '[["","",""],["","",""],["","",""]]';
		$this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');

        break;

      default:
        $output = '[["","",""],["","",""],["","",""]]';
    }
  }

  /**
   * Función principal para el manejo de la accion list
   * del formulario.
   *
   */
  public function executeList()
  {
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/cpdeftit/filters');
	$loncod = Herramientas::getX('codemp','cpdefniv','loncod','001');

     // 15    // pager
    $this->pager = new sfPropelPager('Cpdeftit', 15);
    $c = new Criteria();
    $sql = "length(codpre) = '" . $loncod. "'";
    $c->add(CpdeftitPeer :: CODPRE, $sql, Criteria :: CUSTOM);
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', 1));
    $this->pager->init();
  }

}