<?php

/**
 * nomfalperper actions.
 *
 * @package    Roraima
 * @subpackage nomfalperper
 * @author     $Author: cramirez $ <desarrollo@cidesa.com.ve>
 * @version SVN: $Id: actions.class.php 42869 2011-03-02 23:00:45Z cramirez $
 *
 * @copyright  Copyright 2007, Cide S.A.
 * @license    http://opensource.org/licenses/gpl-2.0.php GPLv2
 */
class nomfalperperActions extends autonomfalperperActions
{

  public function executeIndex()
  {
    return $this->forward('nomfalperper', 'edit');
  }

	/**
   * Función principal para el manejo de las acciones create y edit
   * del formulario.
   *
   */
  public function executeEdit()
	{
		$this->codigoemp = $this->getRequestParameter('codigoemp');
	    $this->nphojint = $this->getNphojintOrCreate();
		if($this->codigoemp!='')
			if($this->nphojint->getCodemp()=='')
		 		 $this->nphojint->setCodemp($this->codigoemp);


	    $this->pagerNpfalper = NpfalperPeer::getPagerByCodemp($this->nphojint->getCodemp(),$this->getRequestParameter('page',1));

		if ($this->getRequest()->getMethod() == sfRequest::POST)
		{
		  $this->updateNphojintFromRequest();

		  $this->saveNphojint($this->nphojint);

		  $this->setFlash('notice', 'Your modifications have been saved');
$this->Bitacora('Guardo');

		  if ($this->getRequestParameter('save_and_add'))
		  {
		    return $this->redirect('nomfalperper/create');
		  }
		  else if ($this->getRequestParameter('save_and_list'))
		  {
		    return $this->redirect('nomfalperper/list');
		  }
		  else
		  {
		    return $this->redirect('nomfalperper/edit?id='.$this->nphojint->getId());
		  }
		}
		else
		{
		  $this->labels = $this->getLabels();
		}

	}
	public function executeGrid()
	{
	 $cajtexmos=$this->getRequestParameter('cajtexmos');
	 if ($this->getRequestParameter('ajax')=='1')
	 {
	 	$dato=NphojintPeer::getNomemp(trim($this->getRequestParameter('codigo')));
                $c = new Criteria();
                $c->addJoin(NpasicarempPeer::CODCAR,NpcargosPeer::CODCAR);
                $c->add(NpasicarempPeer::CODEMP,trim($this->getRequestParameter('codigo')));
                $c->add(NpasicarempPeer::STATUS,'V');
                $per = NpasicarempPeer::doSelectOne($c);
                $cargo='';
                if($per)
                    $cargo = $per->getNomcar();
                $codniv = H::GetX_vacio('Codemp','Nphojint','Codniv',trim($this->getRequestParameter('codigo')));
                $nivel= H::GetX_vacio('Codniv','Npestorg','Desniv',$codniv);
	 	$this->configGrid($this->getRequestParameter('codigo'),$this->getRequestParameter('codmot'));
	 	$output = '[["'.$cajtexmos.'","'.$dato.'",""],["nphojint_nomcar","'.$cargo.'",""],["nphojint_desniv","'.$nivel.'",""]]';
	 	$this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');

	 }
    }

  /**
   * Esta función permite definir la configuración del grid de datos
   * que contiene el formulario. Esta función debe ser llamada
   * en las acciones, create, edit y handleError para recargar en todo momento
   * los datos del grid.
   *
   */
  public function configGrid($codigo='',$codmot='')
  {

      if($codmot!='')
          $sqlmot = "a.codmot='$codmot' and";
      else
          $sqlmot = "";

		$sql = "select a.id as id,to_char(a.fecdes,'dd/mm/yyyy') as fecdes,to_char(a.fechas,'dd/mm/yyyy') as fechas,a.codmot as codmot,b.desmotfal as desmotfal, a.nrodia
			   from npfalper a,npmotfal b where
                           codemp='$codigo' and $sqlmot a.codmot=b.codmotfal ";
	    if (Herramientas::BuscarDatos($sql,&$result))
			$per = $result;
		else
			$per=array();
		/*$c = new Criteria();
		$c->addJoin(NpfalperPeer::CODMOT,NpmotfalPeer::CODMOTFAL);
		$c->add(NpfalperPeer::CODEMP,$codigo);
		$per = NpfalperPeer::doSelect($c);*/
		$filas_arreglo=count($per);
		$this->contper=$filas_arreglo;

		$opciones = new OpcionesGrid();
		$opciones->setEliminar(false);
		$opciones->setFilas(0);
		$opciones->setTabla('Npfalper');
		$opciones->setName('a');
		$opciones->setAnchoGrid(900);
		$opciones->setTitulo('Datos de los Permisos');
		$opciones->setHTMLTotalFilas(' ');

		$col1 = new Columna('Fecha de Salida');
		$col1->setNombreCampo('fecdes');
		$col1->setTipo(Columna::TEXTO);
		$col1->setHTML(' type="text" size="10" readonly="true" ');

		$col2 = new Columna('Fecha de Llegada');
		$col2->setNombreCampo('fechas');
		$col2->setTipo(Columna::TEXTO);
		$col2->setHTML(' type="text" size="10" readonly="true" ');


		$col3 = new Columna('Nro Dias');
		$col3->setTipo(Columna::TEXTO);

		$col3->setAlineacionObjeto(Columna::CENTRO);
		$col3->setAlineacionContenido(Columna::CENTRO);
		$col3->setNombreCampo('nrodia');
		$col3->setHTML('type="text" size="5" readonly="true"');

		$col4 = new Columna('Motivo Salida');
		$col4->setTipo(Columna::TEXTO);
		$col4->setAlineacionObjeto(Columna::CENTRO);
		$col4->setAlineacionContenido(Columna::CENTRO);
		$col4->setNombreCampo('desmotfal');
		$col4->setHTML('type="text" size="100" readonly="true"');


		// Se guardan las columnas en el objetos de opciones
		$opciones->addColumna($col1);
		$opciones->addColumna($col2);
		$opciones->addColumna($col3);
		$opciones->addColumna($col4);


		// Ee genera el arreglo de opciones necesario para generar el grid
		$this->obj = $opciones->getConfig($per);
  }

  protected function getNphojintOrCreate($id = 'id')
  {
    if (!$this->getRequestParameter($id))
    {
      $nphojint = new Nphojint();
 	  $this->configGrid($nphojint->getCodemp());
    }
    else
    {
      $nphojint = NphojintPeer::retrieveByPk($this->getRequestParameter($id));
 	  $this->configGrid($nphojint->getCodemp());
      $this->forward404Unless($nphojint);
    }

    return $nphojint;
  }
}
