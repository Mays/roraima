<?php

/**
 * nomnomcalnom actions.
 *
 * @package    siga
 * @subpackage nomnomcalnom
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class nomnomcalnomActions extends autonomnomcalnomActions
{

  private $coderror = -1;

  public function executeIndex()
  {
    return $this->redirect('nomnomcalnom/edit');
  }


  public function executeEdit()
  {
    if(SF_ENVIRONMENT=='dev'){
      $this->ent='_dev';
    }else
    {
      $this->ent='';
    }
    $this->configGrid();
    parent::executeEdit();

  }

  public function executeMensaje()
  {
  $this->codnom = $this->getRequestParameter('codnom');
  }

  public function executeCalculo()
  {
  $codnom = $this->getRequestParameter('codnom');
  $desde = $this->getRequestParameter('desde');
  $hasta = $this->getRequestParameter('hasta');
  $opsi = $this->getRequestParameter('opsi');
  $msem = $this->getRequestParameter('msem2');
  $cont='no';
  $desde = str_replace('-','/',$desde);
  $hasta = str_replace('-','/',$hasta);

  CalculoNomina::ValidicionPorEmpleado($codnom,$desde,$hasta,$opsi,$msem,&$cont);

    $sql="delete from tmpcalculo where codnom ='".$codnom."' ";
    Herramientas::insertarRegistros($sql);


  $sql="select codnom from tmpcalculo";
  if (!(Herramientas::BuscarDatos($sql,&$tabla)))
  {
    $sql = "drop table tmpcalculo";
    Herramientas::insertarRegistros($sql);
  }

  system('rm archivo* ');

  //PARA EL POPUP DE FIN DEL CALCULO
  /*$host = $_SERVER["HTTP_HOST"];
  $aux = split('/',$_SERVER["REQUEST_URI"]);
  $uri = '';
  for ($i=0;$i<count($aux)-1;$i++)
    $uri = $uri . $aux[$i]."/";

  $url =  'http://'.$host.$uri.'mensaje/cookiecid/44aa95ac18060e7dcdd80251ef74f733/codnom/'.$codnom;
  system('firefox '.$url,$retval);*/

  return sfView::HEADER_ONLY;
  }


  public function executeAjax()
  {
  $cajtexmos=$this->getRequestParameter('cajtexmos');
     $cajtexcom=$this->getRequestParameter('cajtexcom');
     $codigo=$this->getRequestParameter('codigo');
    if ($this->getRequestParameter('ajax')=='1')
      {
        $consultado = false;
        $datoaux='';
        $datopag='';
        ////LOSTFOCUS
       /* if ($codigo!='')
        {
        $sql0="Select distinct(A.codnom),B.nomnom from npdefmov A,npnomina B where A.CodNom='".$codigo."' and A.codnom=B.codnom";
        if (Herramientas::BuscarDatos($sql0,&$npresult))
        {
          $datoaux='valor';
          $consultado=true;
        }
        }*/

      $datoaux='valor';
      $consultado=true;
      if ($consultado)
      {   /////DATOS NIVELES
          $opsi="false";
          $msem="";
        $sql="select codnom, nomnom, numsem, ultfec, profec, frecal,
          to_char(profec,'dd/mm/yyyy') as profec2, to_char(ultfec,'dd/mm/yyyy') as ultfec2
          from npnomina where codnom='".$codigo."' ";
        if (Herramientas::BuscarDatos($sql,&$npnomina))
        {
          $nomnom=$npnomina[0]["nomnom"];
          $numsem=$npnomina[0]["numsem"];
          $ultfec=$npnomina[0]["ultfec"];
          $profec=split('-',$npnomina[0]["profec"]);

          $fecha1=$profec[0].'-'.$profec[1].'-'.'01';

          $fecha2=Herramientas::dateAdd('m',1,$fecha1,'+');
          $fecha2=Herramientas::dateAdd('d',1,$fecha2,'-');

          $numerosemanas=0;

          while (strtotime($fecha1) <= strtotime($fecha2))
          {
            $fecha1b=split('-',$fecha1);

            if (Herramientas::dia_semana($fecha1b[2],$fecha1b[1],$fecha1b[0])=='Lunes')
            {
              $numerosemanas=$numerosemanas+1;
            }
            $dia=1;
            $fecha1=date("Y-m-d", strtotime("$fecha1 +$dia day"));
          }

          $fecha1=$profec[0].'-'.$profec[1].'-'.'01';

          $fecha2=Herramientas::dateAdd('m',1,$fecha1,'+');
          $fecha2=Herramientas::dateAdd('d',1,$fecha2,'-');

          if ($npnomina[0]["frecal"]=='S')
          {
            $datopag='S';

            if (!(is_null($numsem)))
            {
              $msem=$numsem;
            }
            else
            {
              $msem="__";
            }
            $opsi="true";
          }
          else if ($npnomina[0]["frecal"]=='Q')
          {
            $datopag='Q';
          }
          else if ($npnomina[0]["frecal"]=='M')
          {
            $datopag='M';
          }

          $profec=$npnomina[0]["profec2"];
          $ultfec=$npnomina[0]["ultfec2"];
          $output = '[["npnomina_nomnom","'.$nomnom.'",""],["npnomina_numsem","'.$numerosemanas.'",""],["npnomina_profec","'.$profec.'",""],["npnomina_ultfec","'.$ultfec.'",""],["opsi","'.$opsi.'",""],["msem","'.$msem.'",""],["cajocuaux","'.$datopag.'",""]]';

          //$output = '[["caja","'.$profec.'",""]]';
          $this->getUser()->setAttribute('calculolisto','si','nomnomcalnom');
          $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
          return sfView::HEADER_ONLY;
        }
      }
      else
      {
        $output = '[["npnomina_nomnom","No existe",""],["cajocuaux","'.$datoaux.'",""]]';
        $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
          return sfView::HEADER_ONLY;
      }
      }
      ////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////
    else if ($this->getRequestParameter('ajax')=='2') // CALCULO DE NOMINA!!!!!!!!!!!
      {
      $codnom=$this->getRequestParameter('codnom');

      if ($codnom!='')
      {
          try{
              $sql = "select id,codnom,condicion from tmpcalculo where codnom='".$codnom."'";
              if (Herramientas::BuscarDatos($sql,&$npnomina))
            {
              $tabla=true;
            }else
                $tabla=false;
          }catch(Exception $ex){
            $sql = "CREATE TABLE tmpcalculo (id int4 NOT NULL,
                                        codnom VARCHAR(3) NOT NULL,
                                                            condicion VARCHAR(10) NOT NULL
                                                  ) WITHOUT OIDS";
            Herramientas::insertarRegistros($sql);
            $tabla=false;
          }

          $desde=$this->getRequestParameter('desde');
          $hasta=$this->getRequestParameter('hasta');
          $opsi=$this->getRequestParameter('opsi');
          $msem=$this->getRequestParameter('msem2');

          //PARA PROBAR LUEGO DE LA PRUEBA QUITAR COMENTARIO
          //$desde = str_replace('/','-',$desde);
          //$hasta = str_replace('/','-',$hasta);
          //////////////////////////////////////////////////

          if (!$tabla)
          {
            //PARA PROBAR LUEGO DE LA PRUEBA QUITAR COMENTARIO
            /*$host = $_SERVER["HTTP_HOST"];
              $aux = split('/',$_SERVER["REQUEST_URI"]);
              $uri = '';
            for ($i=0;$i<count($aux)-1;$i++)
              $uri = $uri . $aux[$i]."/";*/

            /*$url =  'http://'.$host.$uri.'calculo/cookiecid/44aa95ac18060e7dcdd80251ef74f733/codnom/'.$codnom.'/desde/'.$desde.'/hasta/'.$hasta.'/opsi/'.$opsi.'/msem2/'.$msem.'/archivo/archivo';
            system('wget '.$url.' > /dev/null &',$retval);*/
            ///////////////////////////////////////////////////////


            //ELIMINAR ESTA LINEA DESPUES DE LA PRUEBA
            $now = strtotime(date("Y-m-d H:i:s"));

            CalculoNomina::ValidicionPorEmpleado($codnom,$desde,$hasta,$opsi,$msem,&$cont);
            //////////////////////////////////////////
            $now2 = strtotime(date("Y-m-d H:i:s"));
            $now3 = $now2-$now;

            $output = '[["controlador","no",""],["tiempo","'.$now3.'",""]]';
          }
          else
          {
            $output = '[["controlador","si",""]]';
          }
          //PARA PROBAR LUEGO DE LA PRUEBA ELIMINAR ESTO
            $sql="select codnom from tmpcalculo";
            if (!(Herramientas::BuscarDatos($sql,&$tabla)))
            {
              $sql = "drop table tmpcalculo";
              Herramientas::insertarRegistros($sql);
            }
          ///////////////////////////////////////////////
          $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
          //return sfView::HEADER_ONLY;
          $this->configGrid($codnom);
      }else
      {
        $output = '[["controlador","vacio",""]]';
        $this->getResponse()->setHttpHeader("X-JSON", '('.$output.')');
        return sfView::HEADER_ONLY;
      }
      }
  }

    public function executeAutocomplete()
  {
    if ($this->getRequestParameter('ajax')=='1')
      {
      $this->tags=Herramientas::autocompleteAjax('CODNOM','Npnomina','Codnom',trim($this->getRequestParameter('npnomina[codnom]')));
      }
      else if ($this->getRequestParameter('ajax')=='2')
      {

      }
  }


  public function saveNpnomina($Npnomina)
  {
    $coderr = -1;

    // habilitar la siguiente línea si se usa grid
    //$grid=Herramientas::CargarDatosGrid($this,$this->obj);

    try {

      // Modificar la siguiente línea para llamar al método
      // correcto en la clase del negocio, ej:
      // $coderr = Compras::salvarAlmaujoc($caajuoc,$grid);

      // OJO ----> Eliminar esta linea al modificar este método
      parent::saveNpnomina($Npnomina);

      if(is_array($coderr)){
        foreach ($coderror as $ERR){
          $err = Herramientas::obtenerMensajeError($ERR);
          $this->getRequest()->setError('',$err);
          $this->ActualizarGrid();
        }
      }elseif($coderr!=-1){
        $err = Herramientas::obtenerMensajeError($coderr);
        $this->getRequest()->setError('',$err);
        $this->ActualizarGrid();
      }

    } catch (Exception $ex) {

      $coderror = 0;
      $err = Herramientas::obtenerMensajeError($coderr);
      $this->getRequest()->setError('',$err);

    }


  }


  public function validateEdit()
  {
    $resp=-1;

    // Se deben llamar a las funciones necesarias para cargar los
    // datos de la vista que serán usados en las funciones de validación.
    // Por ejemplo:

    if($this->getRequest()->getMethod() == sfRequest::POST){

      // $this->caajuoc = $this->getCaajuocOrCreate();
      // $this->configGrid();
      // $grid = Herramientas::CargarDatosGrid($this,$this->obj);




      // Aqui van los llamados a los métodos de las clases del
      // negocio para validar los datos.
      // Los resultados de cada llamado deben ser analizados por ejemplo:

      // $resp = Compras::validarAlmajuoc($this->caajuoc,$grid);

      // al final $resp es analizada en base al código que retorna
      // Todas las funciones de validación y procesos del negocio
      // deben retornar códigos >= -1. Estos código serám buscados en
      // el archivo errors.yml en la función handleErrorEdit()

      if($resp!=-1){
        $this->coderror = $resp;
        return false;
      } else return true;

    }else return true;



  }

  public function handleErrorEdit()
  {
    $this->labels = $this->getLabels();
    if(SF_ENVIRONMENT=='dev'){
      $this->ent='_dev';
    }else
    {
      $this->ent='';
    }


    $this->Npnomina= $this->getNpnominaOrCreate();
    $this->updateNpnominaFromRequest();


    if($this->getRequest()->getMethod() == sfRequest::POST)
    {
      if($this->coderror!=-1){
        $err = Herramientas::obtenerMensajeError($this->coderror);
        $this->getRequest()->setError('',$err);
      }
    }
    return sfView::SUCCESS;

  }

public function configGrid($codnom='')
  {
    /////PARA LA CONSULTA//////
    /*$c = new Criteria();
      $c->add(NpnominaPeer::CODNOM,$codnom);
      $per = NpnominaPeer::doSelect($c);*/

    try{
        $sql = "select 9 as id,codnom as codnom,condicion as condicion from tmpcalculo";
        if (Herramientas::BuscarDatos($sql,&$npnomina))
      {
          $per = $npnomina;
      }else
        $per = array('0' => array('id' => 9, 'codnom' => '**********', 'condicion' => 'NO HAY NOMINA EN EJECUCION' ));
    }
    catch(Exception $ex){
      $per = array('0' => array('id' => 9, 'codnom' => '*********', 'condicion' => 'NO HAY NOMINA EN EJECUCION' ));
    }
          ///FIN CONSULTA///

    ////OPCIONES DEL GRID//////
    $opciones = new OpcionesGrid();
      $opciones->setTabla('Npnomina');
      $opciones->setEliminar(false);
      $opciones->setAnchoGrid(400);
      $opciones->setFilas(0);
      $opciones->setTitulo('Nominas en Calculo');
      $opciones->setHTMLTotalFilas(' ');
      ///FIN OPCIONES///

    /////COLUMNAS///////

      $col1 = new Columna('Nomina');
      $col1->setTipo(Columna::TEXTO);
      $col1->setAlineacionObjeto(Columna::CENTRO);
      $col1->setAlineacionContenido(Columna::CENTRO);
      $col1->setNombreCampo('codnom');
      $col1->setHTML('type="text" size="7" maxlength="35"  readonly=true ');


    $col2 = new Columna('Condicion');
      $col2->setTipo(Columna::TEXTO);
      $col2->setAlineacionObjeto(Columna::CENTRO);
      $col2->setAlineacionContenido(Columna::CENTRO);
      $col2->setNombreCampo('condicion');
      $col2->setHTML('type="text" size="40" maxlength="35"  readonly=true');

      $opciones->addColumna($col1);
      $opciones->addColumna($col2);

        ///FIN COLUMNAS///

      $this->obj = $opciones->getConfig($per);
  }


}
