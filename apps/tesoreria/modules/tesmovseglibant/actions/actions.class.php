<?php

/**
 * tesmovseglibant actions.
 *
 * @package    siga
 * @subpackage tesmovseglibant
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class tesmovseglibantActions extends autotesmovseglibantActions
{
  public  $coderror1=-1;
  public  $coderror2=-1;

 public function validateEdit()
  {
    if($this->getRequest()->getMethod() == sfRequest::POST)
    {
      $this->tsmovlib = $this->getTsmovlibOrCreate();
      try{ $this->updateTsmovlibFromRequest();}catch(Exception $ex){}

      if (!Tesoreria::validarFechaContable($this->getRequestParameter('tsmovlib[feclib]')))
      {
	   $this->coderror1=522;
	   return false;
	  }

	  if (Tesoreria::validarFechaMayorMenor($this->getRequestParameter('tsmovlib[feclib]'),$this->getRequestParameter('tsmovlib[fecing]'),'>'))
      {
	   $this->coderror2=523;
	   return false;
	  }
      return true;
    }else return true;
  }

  public function handleErrorEdit()
  {
    $this->preExecute();
    $this->tsmovlib = $this->getTsmovlibOrCreate();
    try{ $this->updateTsmovlibFromRequest();}catch(Exception $ex){}

    $this->labels = $this->getLabels();

    if($this->coderror1!=-1)
     {
       $err1 = Herramientas::obtenerMensajeError($this->coderror1);
       $this->getRequest()->setError('tsmovlib{feclib}',$err1);
     }
     if($this->coderror2!=-1)
     {
       $err = Herramientas::obtenerMensajeError($this->coderror2);
       $this->getRequest()->setError('tsmovlib{feclib}',$err);
     }

    return sfView::SUCCESS;
  }

   protected function saveTsmovlib($tsmovlib)
  {
  	$tsmovlib->setCodcta($tsmovlib->getCtacon());
    $tsmovlib->save();
  }

  public function executeIndex()
  {
     return $this->redirect('tesmovseglibant/edit');
  }


    protected function getTsmovlibOrCreate($id = 'id')
  {
    if (!$this->getRequestParameter($id))
    {
      $tsmovlib = new Tsmovlib();
      $this->nuevo='S';
    }
    else
    {
      $tsmovlib = TsmovlibPeer::retrieveByPk($this->getRequestParameter($id));
      $this->forward404Unless($tsmovlib);
      $this->nuevo='N';
    }

    return $tsmovlib;
  }


    protected function updateTsmovlibFromRequest()
  {
    $tsmovlib = $this->getRequestParameter('tsmovlib');

    if ($this->nuevo=='N')
    {
    	$this->tsmovlib->setDeslib($tsmovlib['deslib']);

    }
	else
	{

    if (isset($tsmovlib['numcue']))
    {
      $this->tsmovlib->setNumcue($tsmovlib['numcue']);
    }
    if (isset($tsmovlib['reflib']))
    {
      $this->tsmovlib->setReflib($tsmovlib['reflib']);
    }
    if (isset($tsmovlib['feclib']))
    {
      if ($tsmovlib['feclib'])
      {
        try
        {
          $dateFormat = new sfDateFormat($this->getUser()->getCulture());
          if (!is_array($tsmovlib['feclib']))
          {
            $value = $dateFormat->format($tsmovlib['feclib'], 'i', $dateFormat->getInputPattern('d'));
          }
          else
          {
            $value_array = $tsmovlib['feclib'];
            $value = $value_array['year'].'-'.$value_array['month'].'-'.$value_array['day'].(isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
          }
          $this->tsmovlib->setFeclib($value);
        }
        catch (sfException $e)
        {
          // not a date
        }
      }
      else
      {
        $this->tsmovlib->setFeclib(null);
      }
    }
    if (isset($tsmovlib['ctacon']))
    {
      $this->tsmovlib->setCtacon($tsmovlib['ctacon']);
    }
    if (isset($tsmovlib['debcre']))
    {
      $this->tsmovlib->setDebcre($tsmovlib['debcre']);
    }
    if (isset($tsmovlib['tipmov']))
    {
      $this->tsmovlib->setTipmov($tsmovlib['tipmov']);
    }
    if (isset($tsmovlib['deslib']))
    {
      $this->tsmovlib->setDeslib($tsmovlib['deslib']);
    }
    if (isset($tsmovlib['monmov']))
    {
      $this->tsmovlib->setMonmov($tsmovlib['monmov']);
    }
    if (isset($tsmovlib['fecing']))
    {
      if ($tsmovlib['fecing'])
      {
        try
        {
          $dateFormat = new sfDateFormat($this->getUser()->getCulture());
                              if (!is_array($tsmovlib['fecing']))
          {
            $value = $dateFormat->format($tsmovlib['fecing'], 'i', $dateFormat->getInputPattern('d'));
          }
          else
          {
            $value_array = $tsmovlib['fecing'];
            $value = $value_array['year'].'-'.$value_array['month'].'-'.$value_array['day'].(isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
          }
          $this->tsmovlib->setFecing($value);
        }
        catch (sfException $e)
        {
          // not a date
        }
      }
      else
      {
        $this->tsmovlib->setFecing(null);
      }
    }
      $this->tsmovlib->setNumcom(null);
      $this->tsmovlib->setCodcta(null);
      $this->tsmovlib->setFeccom(null);
      $this->tsmovlib->setStatus('C');
      $this->tsmovlib->setStacon('N');
	}

  }

	    public function executeAjax()
	{
	 $cajtexmos=$this->getRequestParameter('cajtexmos');
     $cajtexcom=$this->getRequestParameter('cajtexcom');
	  if ($this->getRequestParameter('ajax')=='1')
	    {
	    	$sql="select numcue,codcta from tsdefban where numcue='".$this->getRequestParameter('codigo')."'";
	    	if (Herramientas::BuscarDatos($sql,&$result))
	    	{
	    		$ctacon=$result[0]["codcta"];

	    		$dato=TsdefbanPeer::getNomcue($this->getRequestParameter('codigo'));
            	$output = '[["'.$cajtexmos.'","'.$dato.'",""],["tsmovlib_ctacon","'.$ctacon.'",""]]';
	    	}
	    	else
	    	{
	    		$dato='Banco No Definido';
            	$output = '[["'.$cajtexmos.'","'.$dato.'",""],["tsmovlib_ctacon","",""]]';
	    	}

	    	$this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
	    	return sfView::HEADER_ONLY;
	    }
		else if ($this->getRequestParameter('ajax')=='2')
	    {
	    	$sql="select debcre from tstipmov where codtip='".$this->getRequestParameter('codigo')."'";
	    	if (Herramientas::BuscarDatos($sql,&$result))
	    	{
	    		$dato2=$result[0]["debcre"];
	    	}
  			$dato=TstipmovPeer::getDestip($this->getRequestParameter('codigo'));
            $output = '[["'.$cajtexmos.'","'.$dato.'",""],["tsmovlib_debcre","'.$dato2.'",""]]';

            $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
	    	return sfView::HEADER_ONLY;
	    }
	   /*else  if ($this->getRequestParameter('ajax')=='4')
	   {
	   		$numcue=$this->getRequestParameter('numcue');
			$reflib=$this->getRequestParameter('reflib');
			$tipmov=$this->getRequestParameter('tipmov');

			$c = new Criteria();
			$c->add(TsmovlibPeer::NUMCUE,$numcue);
			$c->add(TsmovlibPeer::REFLIB,$reflib);
			$c->add(TsmovlibPeer::TIPMOV,$tipmov);
			$tsmovlib=TsmovlibPeer::doSelectOne($c);
			$id=$tsmovlib->getId();

	  		$msg = $this->executeEliminar();
	  	  	$this->ajax='4';

			if ($msg=='')
			{
		  		$this->setFlash('notice','Registro Eliminado exitosamente');
		  		return $this->redirect('tesmovseglib/edit');
			}
			else
			{
				$this->setFlash('notice',$msg);
				return $this->redirect('tesmovseglib/edit?id='.$id);
			}
		  	return sfView::HEADER_ONLY;

	   }*/
	}

     public function executeAutocomplete()
	{
		if ($this->getRequestParameter('ajax')=='1')
	    {
		 	$this->tags=Herramientas::autocompleteAjax('NUMCUE','Tsdefban','Numcue',trim($this->getRequestParameter('tsmovlib[numcue]')));
	    }
	    else if ($this->getRequestParameter('ajax')=='2')
	    {
			$this->tags=Herramientas::autocompleteAjax('CODTIP','Tstipmov','Codtip',trim(strtoupper($this->getRequestParameter('tsmovlib[tipmov]'))));
	    }
	}

  	public function executeAnular()
	{
		$numcue=$this->getRequestParameter('numcue');
		$reflib=$this->getRequestParameter('reflib');
		$feclib=$this->getRequestParameter('feclib');
		$this->compadic=$this->getRequestParameter('compadic');

		$dateFormat = new sfDateFormat($this->getUser()->getCulture());
    	$fec = $dateFormat->format($feclib, 'i', $dateFormat->getInputPattern('d'));


		$c = new Criteria();
		$c->add(TsmovlibPeer::NUMCUE,$numcue);
	    $c->add(TsmovlibPeer::REFLIB,$reflib);
	    $c->add(TsmovlibPeer::FECLIB,$fec);
	    $this->tsmovlib = TsmovlibPeer::doSelectOne($c);
		sfView::SUCCESS;

	}


}
