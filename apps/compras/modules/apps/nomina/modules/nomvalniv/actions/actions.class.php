<?php

/**
 * nomvalniv actions.
 *
 * @package    siga
 * @subpackage nomvalniv
 * @author     $Auhor$ <desarrollo@cidesa.com.ve>
 * @version    SVN: $Id: actions.class.php 32371 2009-09-01 16:06:59Z lhernandez $
 * @copyright  Copyright 2007, Cidesa C.A.
 */

class nomvalnivActions extends autonomvalnivActions
{

  // Para incluir funcionalidades al executeEdit()
  public function editing()
  {
	$this->configGridValores($this->rhvalniv->getCodniv());
  }

  public function configGridValores($codniv='')
  {	
  
	$c = new Criteria();
	$c->add(RhvalnivPeer::CODNIV,$codniv);
    $per = RhvalnivPeer::doSelect($c);

    // Se crea el objeto principal de la clase OpcionesGrid
    $opciones = new OpcionesGrid();
    // Se configuran las opciones globales del Grid	
	$opciones->setTabla('Rhvalniv');	
	$opciones->setEliminar(true);
    $opciones->setAnchoGrid(900);
	$opciones->setAncho(700);
	$opciones->setName('a');
	$opciones->setFilas(1);	
    $opciones->setTitulo('Datos de Valores');
    $opciones->setHTMLTotalFilas(' ');
    // Se generan las columnas	
	
    $col1 = new Columna('Código Valores');
    $col1->setTipo(Columna::TEXTO);
    $col1->setEsGrabable(true);
    $col1->setAlineacionObjeto(Columna::CENTRO);
    $col1->setAlineacionContenido(Columna::CENTRO);    
	$col1->setNombreCampo('codvalins');
	$col1->setCatalogo('rhdefvalins','sf_admin_edit_form',array('codvalins' => 1,'desvalins' => 2), 'rhdefvalins_codvalins');
	$col1->setHTML('type="text" size=5 ');
   
    $col2 = new Columna('Nombre');
    $col2->setTipo(Columna::TEXTO);
    $col2->setAlineacionObjeto(Columna::CENTRO);
    $col2->setAlineacionContenido(Columna::CENTRO);    
	$col2->setNombreCampo('desvalins');
	$col2->setHTML('type="text" size=60');
	
	$col3 = new Columna('%(Peso)');
    $col3->setTipo(Columna::MONTO);
    $col3->setEsGrabable(true);
    $col3->setAlineacionObjeto(Columna::CENTRO);
    $col3->setAlineacionContenido(Columna::CENTRO);    
	$col3->setNombreCampo('porvalins');
	$col3->setHTML('type="text" size=5 ');
	

    // Se guardan las columnas en el objetos de opciones
    $opciones->addColumna($col1);
    $opciones->addColumna($col2);
	$opciones->addColumna($col3);		

    // Se genera el arreglo de opciones necesario para generar el grid
    $this->obj = $opciones->getConfig($per);
	$this->rhvalniv->setObj_valniv($this->obj);

  }

  public function executeAjax()
  {

    $codigo = $this->getRequestParameter('codigo','');
    // Esta variable ajax debe ser usada en cada llamado para identificar
    // que objeto hace el llamado y por consiguiente ejecutar el código necesario
    $ajax = $this->getRequestParameter('ajax','');

    // Se debe enviar en la petición ajax desde el cliente los datos que necesitemos
    // para generar el código de retorno, esto porque en un llamado Ajax no se devuelven
    // los datos de los objetos de la vista como pasa en un submit normal.

    switch ($ajax){
      case '1':
        // La variable $output es usada para retornar datos en formato de arreglo para actualizar
        // objetos en la vista. mas informacion en
        // http://201.210.211.26:8080/www/wiki/index.php/Agregar_Ajax_para_buscar_una_descripcion
        $output = '[["","",""],["","",""],["","",""]]';
        break;
      default:
        $output = '[["","",""],["","",""],["","",""]]';
    }

    // Instruccion para escribir en la cabecera los datos a enviar a la vista
    $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');

    // Si solo se va usar ajax para actualziar datos en objetos ya existentes se debe
    // mantener habilitar esta instrucción
    return sfView::HEADER_ONLY;

    // Si por el contrario se quiere reemplazar un div en la vista, se debe deshabilitar
    // por supuesto tomando en cuenta que debe existir el archivo ajaxSuccess.php en la carpeta templates.

  }


  /**
   *
   * Función que se ejecuta luego los validadores del negocio (validators)   * Para realizar validaciones específicas del negocio del formulario
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
	  
	  $this->rhvalniv = $this->getRhvalnivOrCreate();
	  $this->updateRhvalnivFromRequest();
	  $this->configGridValores();
	  
	  $grid = Herramientas::CargarDatosGridv2($this,$this->obj);

	  if(count($grid[0])>=1)
	  {
	  	foreach($grid[0] as $dat)
		{
			if(!$dat->getCodvalins())	
			{
			  $this->coderr=816;	
			  return false;
			}
			if(!$dat->getPorvalins())	
			{
			  $this->coderr=816;	
			  return false;
			}else
			{
				if(floatval($dat->getPorvalins())>100 ||  floatval($dat->getPorvalins())<=0)
				{
					$this->coderr=817;
					return false;
				}
			}

		}	  	
	  }else
	  {
	  	$this->coderr=815;
		return false;
	  }

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
    $this->configGridValores();
    $grid = Herramientas::CargarDatosGridv2($this,$this->obj);
    //$this->configGrid($grid[0],$grid[1]);

  }

  public function saving($clasemodelo)
  {
  	$grid = Herramientas::CargarDatosGridv2($this,$this->obj);
	$arreglo=array('Codniv');
	H::Guardar_Grid($grid,$arreglo,$clasemodelo);
    return '-1';
  }

  public function deleting($clasemodelo)
  {
  	$c = new Criteria();
	$c->add(RhvalnivPeer::CODNIV,$clasemodelo->getCodniv());
	RhvalnivPeer::doDelete($c);
	
    return '-1';
  }


}
