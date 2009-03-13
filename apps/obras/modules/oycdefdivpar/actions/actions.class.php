<?php

/**
 * oycdefdivpar actions.
 *
 * @package    siga
 * @subpackage oycdefdivpar
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class oycdefdivparActions extends autooycdefdivparActions
{
  public function executeEdit()
  {
    $this->ocparroq = $this->getOcparroqOrCreate();
    $this->funciones_combos();

    if ($this->getRequest()->getMethod() == sfRequest::POST)
    {
      $this->updateOcparroqFromRequest();

      $this->saveOcparroq($this->ocparroq);

      $this->setFlash('notice', 'Your modifications have been saved');
$this->Bitacora('Guardo');

      if ($this->getRequestParameter('save_and_add'))
      {
        return $this->redirect('oycdefdivpar/create');
      }
      else if ($this->getRequestParameter('save_and_list'))
      {
        return $this->redirect('oycdefdivpar/list');
      }
      else
      {
        return $this->redirect('oycdefdivpar/edit?id='.$this->ocparroq->getId());
      }
    }
    else
    {
      $this->labels = $this->getLabels();
    }
  }

  protected function updateOcparroqFromRequest()
  {
    $ocparroq = $this->getRequestParameter('ocparroq');
    $this->funciones_combos();

    if (isset($ocparroq['codpai']))
    {
      $this->ocparroq->setCodpai($ocparroq['codpai']);
    }
    if (isset($ocparroq['codedo']))
    {
      $this->ocparroq->setCodedo($ocparroq['codedo']);
    }
    if (isset($ocparroq['codmun']))
    {
      $this->ocparroq->setCodmun($ocparroq['codmun']);
    }
    if (isset($ocparroq['codpar']))
    {
      $this->ocparroq->setCodpar($ocparroq['codpar']);
    }
    if (isset($ocparroq['nompar']))
    {
      $this->ocparroq->setNompar($ocparroq['nompar']);
    }
  }

   public function executeCombo()
	{
		if ($this->getRequestParameter('par')=='1')
		{
			$this->estados = $this->Cargarestados($this->getRequestParameter('pais'));
			$this->tipo='P';
		}
		elseif ($this->getRequestParameter('par')=='2')
		{
			$this->municipios = $this->CargarMunicipios($this->getRequestParameter('pais'),$this->getRequestParameter('estado'));
			$this->tipo='E';
		}
	}

	public function Cargarpais()
	{
		$tablas=array('ocpais');//areglo de los joins de las tablas
		$filtros_tablas=array('');//arreglo donde mando los filtros de las clases
		$filtros_variales=array('');//arreglo donde mando los parametros de la funcion
		$campos_retornados=array('codpai','nompai');// arreglos donde me traigo el nombre y el codigo
		return $pais= Herramientas::Cargarcombo($tablas,$filtros_tablas,$filtros_variales,$campos_retornados);
	}

	public function Cargarestados($codpais)
	{
		$tablas=array('ocestado');//areglo de los joins de las tablas
		$filtros_tablas=array('codpai');//arreglo donde mando los filtros de las clases
		$filtros_variales=array($codpais);//arreglo donde mando los parametros de la funcion
		$campos_retornados=array('codedo','nomedo');// arreglos donde me traigo el nombre y el codigo
		return $estado= Herramientas::Cargarcombo($tablas,$filtros_tablas,$filtros_variales,$campos_retornados);
	}


	public function CargarMunicipios($codpais,$codestado)
	{
		$tablas=array('ocmunici');//areglo de los joins de las tablas
		$filtros_tablas=array('codpai','codedo');//arreglo donde mando los filtros de las clases
		$filtros_variales=array($codpais,$codestado);//arreglo donde mando los parametros de la funcion
		$campos_retornados=array('codmun','nommun');// arreglos donde me traigo el nombre y el codigo
		return $ciudad= Herramientas::Cargarcombo($tablas,$filtros_tablas,$filtros_variales,$campos_retornados);

	}

	public function funciones_combos()
	{
		$this->pais = $this->Cargarpais();
		$this->estados = $this->Cargarestados($this->ocparroq->getCodpai());//colocar lo q viene de bd
		$this->municipios = $this->CargarMunicipios($this->ocparroq->getCodpai(),$this->ocparroq->getCodedo());//colocar lo q viene de bd
	}

  public function executeDelete()
  {
    $this->ocparroq = OcparroqPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->ocparroq);

    $c= new Criteria();
    $c->add(OcsectorPeer::CODPAI,$this->ocparroq->getCodpai());
    $c->add(OcsectorPeer::CODEDO,$this->ocparroq->getCodedo());
    $c->add(OcsectorPeer::CODMUN,$this->ocparroq->getCodmun());
    $c->add(OcsectorPeer::CODPAR,$this->ocparroq->getCodpar());
    $result= OcsectorPeer::doSelect($c);
    if (!$result)
    {
      $this->deleteOcparroq($this->ocparroq);
    }
    else
    {
      $this->getRequest()->setError('delete', 'No Puede Eliminar la Parroquia. Existen Registros Asociados.');
      return $this->forward('oycdefdivpar', 'list');
    }

    return $this->redirect('oycdefdivpar/list');
  }

}
