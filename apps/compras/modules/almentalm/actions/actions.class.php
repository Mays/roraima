<?php

/**
 * almentalm actions.
 *
 * @package    siga
 * @subpackage almentalm
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class almentalmActions extends autoalmentalmActions
{
	private $coderror =-1;

	public function getCadetent($rcpart)
	{
		$c = new Criteria();
		$c->add(CadetentPeer::RCPART,$rcpart);
		return CadetentPeer::doSelect($c);
	}

  public function executeEdit()
  {
    $this->caentalm = $this->getCaentalmOrCreate();
    $this->setVars();
    $this->configGrid();

    if ($this->getRequest()->getMethod() == sfRequest::POST)
    {
      $this->updateCaentalmFromRequest();

      if ($this->saveCaentalm($this->caentalm)==-1)
      {
	      $this->setFlash('notice', 'Your modifications have been saved');
$this->Bitacora('Guardo');

	      if ($this->getRequestParameter('save_and_add'))
	      {
	        return $this->redirect('almentalm/create');
	      }
	      else if ($this->getRequestParameter('save_and_list'))
	      {
	        return $this->redirect('almentalm/list');
	      }
	      else
	      {
	        return $this->redirect('almentalm/edit?id='.$this->caentalm->getId());
	      }
      }
      else
	   {
          $this->labels = $this->getLabels();
       	  if($this->coderror!=-1)
	      {
	       $err = Herramientas::obtenerMensajeError($this->coderror);
	       $this->getRequest()->setError('',$err);
	      }
          return sfView::SUCCESS;
       }
    }
    else
    {
      $this->labels = $this->getLabels();
    }
  }

  protected function saveCaentalm($caentalm)
  {
        if ($caentalm->getId())
        	$grid=array();
   		else
        	$grid=Herramientas::CargarDatosGrid($this,$this->obj);

	    $coderr=Articulos::salvarAlmentalm($caentalm,$grid);
	    $this->coderror=$coderr;
	    return $coderr;
  }

  protected function deleteCaentalm($caentalm)
  {
       Articulos::eliminarAlmentalm($caentalm);
  }


  public function executeDelete()
  {
    $this->caentalm = CaentalmPeer::retrieveByPk($this->getRequestParameter('id'));
    $this->forward404Unless($this->caentalm);
    $id=$this->getRequestParameter('id');

    if (Articulos::Hay_DevolucionRCP($this->caentalm))
    {
         $this->setFlash('notice','La Entrada no puede ser eliminada ya que existe una Devolución, se recomienda borrar en primer lugar la Devolución y luego ejecutar la operación');
        return $this->redirect('almentalm/edit?id='.$id);
    }
    else
    {
    	try
	    {
	      $this->deleteCaentalm($this->caentalm);
	    }
	    catch (PropelException $e)
	    {
	      $this->getRequest()->setError('delete', 'Could not delete the selected Caentalm. Make sure it does not have any associated items.');
	      return $this->forward('almentalm', 'list');
	    }
	    return $this->redirect('almentalm/list');
    }
  }

  protected function updateCaentalmFromRequest()
  {
    $caentalm = $this->getRequestParameter('caentalm');

    if (isset($caentalm['rcpart']))
    {
      $this->caentalm->setRcpart($caentalm['rcpart']);
    }
    if (isset($caentalm['codpro']))
    {
      //buscar el codigo del proveedor, ya que lo que el usuario llena es el RIF
      $codprovee=Herramientas::getX('RIFPRO','Caprovee','Codpro',$caentalm['codpro']);
      $this->caentalm->setCodpro($codprovee);
    }
    if (isset($caentalm['desrcp']))
    {
      $this->caentalm->setDesrcp($caentalm['desrcp']);
    }
    if (isset($caentalm['monrcp']))
    {
      $this->caentalm->setMonrcp($caentalm['monrcp']);
    }
    if (isset($caentalm['tipmov']))
    {
      $this->caentalm->setTipmov($caentalm['tipmov']);
    }
    if (isset($caentalm['fecrcp']))
    {
      if ($caentalm['fecrcp'])
      {
        try
        {
          $dateFormat = new sfDateFormat($this->getUser()->getCulture());
                              if (!is_array($caentalm['fecrcp']))
          {
            $value = $dateFormat->format($caentalm['fecrcp'], 'i', $dateFormat->getInputPattern('d'));
          }
          else
          {
            $value_array = $caentalm['fecrcp'];
            $value = $value_array['year'].'-'.$value_array['month'].'-'.$value_array['day'].(isset($value_array['hour']) ? ' '.$value_array['hour'].':'.$value_array['minute'].(isset($value_array['second']) ? ':'.$value_array['second'] : '') : '');
          }
          $this->caentalm->setFecrcp($value);
        }
        catch (sfException $e)
        {
          // not a date
        }
      }
      else
      {
        $this->caentalm->setFecrcp(null);
      }
    }

    $this->caentalm->setStarcp('A');

  }

  protected function getCaentalmOrCreate($id = 'id')
  {
    if (!$this->getRequestParameter($id))
    {
      $caentalm = new Caentalm();
    }
    else
    {
      $caentalm = CaentalmPeer::retrieveByPk($this->getRequestParameter($id));

      $this->forward404Unless($caentalm);
    }

    return $caentalm;
  }

	public function executeAjax()
	{
	 $cajtexmos=$this->getRequestParameter('cajtexmos');
     $cajtexcom=$this->getRequestParameter('cajtexcom');
	 if ($this->getRequestParameter('ajax')=='1')
	 {
		$aux = split('_',$cajtexmos);
		$name=$aux[0];
		$fil=$aux[1];
		$cajtexcom=$name."_".$fil."_6";
		$cajcodubi=$name."_".$fil."_8";
		$cajnomubi=$name."_".$fil."_9";
		$cajnumlot=$name."_".$fil."_10";
	    $codalm=$this->getRequestParameter('codalm');
	  	$codart=$this->getRequestParameter('codart');

		$codalm=str_pad($codalm,6,'0',STR_PAD_LEFT);	$c=new Criteria();
	    $c->add(CadefalmPeer::CODALM,$codalm);
	    $datos=CadefalmPeer::doSelectOne($c);
	    if ($datos)
	     {
	       $nomalm=$datos->getNomalm();
	       //busco la primera ubicacion para el almacen seleccionado, para el articulo tipeado
	       $c = new Criteria();
           $c->add(CaartalmubiPeer::CODALM,$codalm);
           $c->add(CaartalmubiPeer::CODART,$codart);
           $c->addAscendingOrderByColumn(CaartalmubiPeer::CODUBI);
           $alm = CaartalmubiPeer::doSelectOne($c);
           if ($alm)
           {
             	$codubi=$alm->getCodubi();
             	$nomubi=CadefubiPeer::getDesubicacion($codubi);
             	$output = '[["'.$cajtexmos.'","'.$nomalm.'",""],["'.$cajtexcom.'","6","c"],["'.$cajcodubi.'","'.$codubi.'",""],["'.$cajnomubi.'","'.$nomubi.'",""]]';
           }
           else//el almacen seleccionado no existe para el articulo introducido por el usuario
           {
	    	$javascript="alert('El articulo : ".$codart.", no existe en el Almacen seleccionado: ".$codalm." ')";
	    	$output = '[["'.$cajtexmos.'","",""],["'.$cajcodubi.'","",""],["'.$cajnomubi.'","",""],["'.$cajtexcom.'","",""],["javascript","'.$javascript.'",""]]';
           }

	     }
	    else
	    {
	    	$nomalm="";
	    	$javascript="alert('Codigo del Almacen no existe...')";
	    	$output = '[["'.$cajtexmos.'","'.$nomalm.'",""],["'.$cajcodubi.'","",""],["'.$cajnomubi.'","",""],["'.$cajtexcom.'","",""],["javascript","'.$javascript.'",""]]';
	    }// if ($datos)

	    }
	    else  if ($this->getRequestParameter('ajax')=='2')
	    {
	  		$dato=CaproveePeer::getNompro($this->getRequestParameter('codigo'));
            $output = '[["'.$cajtexmos.'","'.$dato.'",""]]';
	    }
	    else  if ($this->getRequestParameter('ajax')=='3')
	    {
	  		$dato=CatipentPeer::getNomtip($this->getRequestParameter('codigo'));
            $output = '[["'.$cajtexmos.'","'.$dato.'",""],["'.$cajtexcom.'","3","c"]]';
	    }
		else  if ($this->getRequestParameter('ajax')=='4')
	    {
	  		$dato=CaregartPeer::getDescripcion_art($this->getRequestParameter('codigo'));
            $output = '[["'.$cajtexmos.'","'.$dato.'",""]]';
	    }
	    else if ($this->getRequestParameter('ajax')=='5')
	    {
	      	$aux = split('_',$cajtexmos);
			$name=$aux[0];
			$fil=$aux[1];
			$cajcodubi=$name."_".$fil."_8";
			$cajnomubi=$name."_".$fil."_9";
		    $cajnumlot=$name."_".$fil."_10";
			$codalm=$this->getRequestParameter('codalm');
	  	    $codubi=$this->getRequestParameter('codigo');
	  	    $codart=$this->getRequestParameter('codart');
			if (trim($codalm)!="")
	        {
               $c = new Criteria();
	           $c->add(CaartalmubiPeer::CODALM,$codalm);
	           $c->add(CaartalmubiPeer::CODUBI,$codubi);
	           $c->add(CaartalmubiPeer::CODART,$codart);
	           $alm = CaartalmubiPeer::doSelectOne($c);
           	   if ($alm)
           	   {
           	   		$dato=CadefubiPeer::getDesubicacion($codubi);
           	   		$javascript="";
           	   }
              else
              {
                  $javascript="alert('La ubicacion : ".$codubi.", no existe para el almacen seleccionado: ".$codalm." y el articulo ".$codart." ')";
                  $dato="";
                  $codubi="";
                  $numlot="";
              }
            $output = '[["'.$cajnomubi.'","'.$dato.'",""],["'.$cajcodubi.'","'.$codubi.'",""],["javascript","'.$javascript.'",""]]';
	      }
	      else
	      {
	      	$javascript="alert('Primero debe seleccionar un Almacen...');";
	      	$dato="";
	      	$codubi="";
	      	$numlot="";
  			$output = '[["'.$cajnomubi.'","'.$dato.'",""],["'.$cajcodubi.'","'.$codubi.'",""],["javascript","'.$javascript.'",""]]';
	      }

	    }

  	    $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
	    return sfView::HEADER_ONLY;
	}

	public function executeAutocomplete()
	{
		if ($this->getRequestParameter('ajax')=='1')
	    {
		 	$this->tags=Herramientas::autocompleteAjax('CODALM','Cadefalm','Codalm',trim($this->getRequestParameter('caentalm[codalm]')));
	    }
		else if ($this->getRequestParameter('ajax')=='2')
	    {
		 	$this->tags=Herramientas::autocompleteAjax('RIFPRO','Caprovee','Rifpro',trim($this->getRequestParameter('caentalm[codpro]')));
	    }
		else if ($this->getRequestParameter('ajax')=='3')
	    {
		 	$this->tags=Herramientas::autocompleteAjax('CODTIPENT','Catipent','Codtipent',trim($this->getRequestParameter('caentalm[tipmov]')));
	    }
		else if ($this->getRequestParameter('ajax')=='4')
	    {
		 	//nada
	    }
	}



	public function configGrid()
	{
      $c = new Criteria();
      $c->add(CadetentPeer::RCPART,$this->caentalm->getRcpart());
      $per = CadetentPeer::doSelect($c);

	    $mascaraarticulo=$this->mascaraarticulo;
	    // $i18n = $this->getContext()->getI18N();
	    // Se crea el objeto principal de la clase OpcionesGrid
	    $opciones = new OpcionesGrid();
	    // Se configuran las opciones globales del Grid
	    if ($this->caentalm->getId())
        	$opciones->setEliminar(false);
       else
        	$opciones->setEliminar(true);

        $opciones->setTabla('Cadetent');
        $opciones->setAnchoGrid(1400);
        $opciones->setAncho(1500);
        $opciones->setTitulo('Detalle de la Entrada');
        $opciones->setName('a');
        $opciones->setHTMLTotalFilas(' ');

		if ($this->caentalm->getId()){
		   $opciones->setFilas(0);
		}else{
			$opciones->setFilas(100);
		}


        // Se generan las columnas
        $col1 = new Columna('Cod. Artículo');
        $col1->setTipo(Columna::TEXTO);
        $col1->setEsGrabable(true);
        $col1->setAlineacionObjeto(Columna::CENTRO);
        $col1->setAlineacionContenido(Columna::CENTRO);
        $col1->setNombreCampo('Codart');
       	if ($this->caentalm->getId())
       	{
       		$col1->setHTML('type="text" size="12" readonly=true');
       	}
       	else
       	{
       		$col1->setCatalogo('Caregart','sf_admin_edit_form',array('codart'=> 1, 'desart'=> 2),'Caregart_Almentalm');
        	$col1->setJScript('onKeyDown="javascript:return dFilter (event.keyCode, this,'.chr(39).$mascaraarticulo.chr(39).')" onKeyPress="javascript:cadena=rayaenter(event,this.value);if (event.keyCode==13 || event.keyCode==9){document.getElementById(this.id).value=cadena;}"');
        	$col1->setHTML('type="text" size="12"');
        	$col1->setAjax('almentalm',4,2);
       	}

        $col2 = new Columna('Descripción');
        $col2->setTipo(Columna::TEXTAREA);
        $col2->setAlineacionObjeto(Columna::IZQUIERDA);
        $col2->setAlineacionContenido(Columna::IZQUIERDA);
        $col2->setNombreCampo('Desart');
        $col2->setHTML('type="text" size="25x1" readonly=true');

        $col3 = new Columna('Cantidad');
        $col3->setNombreCampo('Canrec');
        $col3->setTipo(Columna::MONTO);
        $col3->setEsGrabable(true);
        $col3->setAlineacionObjeto(Columna::DERECHA);
        $col3->setAlineacionContenido(Columna::DERECHA);
        $col3->setEsNumerico(true);
        if ($this->caentalm->getId())
        {
           $col3->setHTML('type="text" size=6 readonly=true');
        }
        else
        {
           $col3->setHTML('type="text" size=6');
           $col3->setJScript('onKeypress="costoenter(event,this.id)"');
        }

        $col4 = new Columna('Costo');
        $col4->setNombreCampo('Cosart');
        $col4->setTipo(Columna::MONTO);
        $col4->setEsGrabable(true);
        $col4->setAlineacionObjeto(Columna::DERECHA);
        $col4->setAlineacionContenido(Columna::DERECHA);
        $col4->setEsNumerico(true);
        if ($this->caentalm->getId())
        {
           $col4->setHTML('type="text" size=10 readonly=true');
        }
        else
        {
           $col4->setHTML('type="text" size=10');
           $col4->setJScript('onKeypress="costoenter(event,this.id)"');

        }

		$col5 = new Columna('Total');
        $col5->setNombreCampo('Montot');
        $col5->setTipo(Columna::MONTO);
        $col5->setEsGrabable(true);
        $col5->setAlineacionObjeto(Columna::DERECHA);
        $col5->setAlineacionContenido(Columna::DERECHA);
        $col5->setHTML('type="text" size=10 readonly=true');
        $col5->setEsTotal(true,'caentalm_monrcp');

	$objalm= array ('codalm' => '6','nomalm' =>'7');
	$col6 = new Columna('Codigo del Almacen');
    $col6->setTipo(Columna::TEXTO);
    $col6->setAlineacionObjeto(Columna::CENTRO);
    $col6->setAlineacionContenido(Columna::CENTRO);
    $col6->setEsGrabable(true);
    $col6->setNombreCampo('codalm');

   	if ($this->caentalm->getId())
   	{
   		$col6->setHTML('type="text" size="8" readonly=true');
   	}
   	else
   	{
		$col6->setHTML('type="text" size="8" maxlength="6"');
		$col6->setCatalogo('Cadefalm','sf_admin_edit_form',$objalm,'Cadelfalm_Almordrec');
		$col6->setJScript('onBlur="ejecutaajaxalm(this.id)"');
   	}

    $col7 = new Columna('Nombre Almacén');
	$col7->setTipo(Columna::TEXTAREA);
	$col7->setEsGrabable(true);
	$col7->setNombreCampo('nomalm');
	$col7->setAlineacionObjeto(Columna::CENTRO);
	$col7->setAlineacionContenido(Columna::CENTRO);
    $col7->setHTML('type="text" size="30x1" readonly=true');

	$objubi= array ('codubi' => '8','nomubi' =>'9');
	$params = array("'+$(this.id).up().previous(1).descendants()[0].value+'",'val2');
	$col8 = new Columna('Codigo de Ubicacion');
	$col8->setTipo(Columna::TEXTO);
	$col8->setAlineacionObjeto(Columna::CENTRO);
	$col8->setAlineacionContenido(Columna::CENTRO);
	$col8->setEsGrabable(true);
	$col8->setNombreCampo('codubi');

   	if ($this->caentalm->getId())
   	{
   		$col8->setHTML('type="text" size="10" readonly=true');
   	}
   	else
   	{
	    $col8->setHTML('type="text" size="10" maxlength="'.chr(39).$this->lonubi.chr(39).'"');
	    $col8->setCatalogo('Cadefubi','sf_admin_edit_form',$objubi,'Cadefubi_Almdes',$params);
	    $col8->setJScript('onKeyDown="javascript:return dFilter (event.keyCode, this,'.chr(39).$this->mascaraubi.chr(39).')"  onBlur="ejecutaajax(this.id)"');
   	}

	    $col9 = new Columna('Nombre Ubicación');
		$col9->setTipo(Columna::TEXTAREA);
		$col9->setEsGrabable(true);
		$col9->setNombreCampo('nomubi');
		$col9->setAlineacionObjeto(Columna::CENTRO);
		$col9->setAlineacionContenido(Columna::CENTRO);
	    $col9->setHTML('type="text" size="30x1" readonly=true');


        // Se guardan las columnas en el objetos de opciones
        $opciones->addColumna($col1);
        $opciones->addColumna($col2);
        $opciones->addColumna($col3);
        $opciones->addColumna($col4);
        $opciones->addColumna($col5);
        $opciones->addColumna($col6);
        $opciones->addColumna($col7);
        $opciones->addColumna($col8);
        $opciones->addColumna($col9);
	    // Ee genera el arreglo de opciones necesario para generar el grid
        $this->obj = $opciones->getConfig($per);

	}

  public function validateEdit()
  {
     $resp=-1;
      if($this->getRequest()->getMethod() == sfRequest::POST)
      {
 	   $this->caentalm = $this->getCaentalmOrCreate();
       try{
	    $this->updateCaentalmFromRequest();
          }
	    catch(Exception $ex){}

	    $this->setVars();
    	$this->configGrid();
    	//$grid=Herramientas::CargarDatosGrid($this,$this->obj);

		 if ($this->caentalm->getId())
		 {
		 }else   //Nuevo Registro
		 {
		 	$caentalm = $this->getRequestParameter('caentalm');

			    	//verificar en el grid de articulos que todos los articulos pertenezcan al almacen y ubicacion indicada
			    	//y verificar que al menos un articulo del grid tenga cantidad mayo que cero.
			    	  $grid = Herramientas::CargarDatosGrid($this,$this->obj);
				      $msg  = "";
				      $x    = $grid[0];
				      $j    = 0;
				      $h    = 0;
				      $encontro = false;
				      while ($j<count($x))
				      {
				         if ($x[$j]->getCanrec()>0)
				      	 {
					      	 $encontro=true;
					      	 if ($x[$j]->getCodalm()=="" or  $x[$j]->getCodubi()=="" )
					      	 {
					      	 	$msg="Debe indicar el Código del Almacén, la Ubicación y el Nro. del Lote de todos los Artículos de la Entradas en el Almacen";
					      	 	$this->getRequest()->setError('',$msg);
				 				return false;
					      	 }// if ($x[$j]->getCodalm()=="" or  $x[$j]->getCodubi()=="")
				      	 }//if ($x[$j]->getCanrecgri()>0)
				         $j++;
				      }//while ($j<count($x))
	                   if (!$encontro)
	                   {
	                   	$mierr = Herramientas::obtenerMensajeError('162');
	                    $this->getRequest()->setError('',$mierr);
				 		return false;
	                   }
	                   return true;

		 }
         return true;
       }else return true;
  }

  public function handleErrorEdit()
  {

    $this->preExecute();
    $this->caentalm = $this->getCaentalmOrCreate();


	try{
		$this->updateCaentalmFromRequest();
		}catch(Exception $ex){}

     $this->labels = $this->getLabels();
     if($this->getRequest()->getMethod() == sfRequest::POST)
     {
      if($this->coderror!=-1)
	  {
	   $err = Herramientas::obtenerMensajeError($this->coderror);
	   $this->getRequest()->setError('',$err);
	  }
     }
     return sfView::SUCCESS;
  }

    public function setVars()
  {
    $this->mascaraarticulo = Herramientas::getMascaraArticulo();
    $this->mascaraubi= Herramientas::ObtenerFormato('Cadefart','Forubi');
    $this->lonubi=strlen($this->mascaraubi);
  }

}
