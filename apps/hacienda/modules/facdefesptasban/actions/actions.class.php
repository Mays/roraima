<?php

/**
 * Facdefesptasban actions.
 *
 * @package    siga
 * @subpackage Facdefesptasban
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 2288 2006-10-02 15:22:13Z fabien $
 */
class FacdefesptasbanActions extends autoFacdefesptasbanActions
{
  public function executeList()
  {
    $this->processSort();

    $this->processFilters();

    $this->filters = $this->getUser()->getAttributeHolder()->getAll('sf_admin/fctasban/filters');


     // 15    // pager
    $this->pager = new sfPropelPager('Fctasban', 15);
    $c = new Criteria();
    //MODIFICO EL CRITERIA
    $c-> add(FctasbanPeer::TASMES,"01");
    $this->addSortCriteria($c);
    $this->addFiltersCriteria($c);
    $this->pager->setCriteria($c);
    $this->pager->setPage($this->getRequestParameter('page', 1));
    $this->pager->init();
  }

  protected function saving($fctasban)
  {
  	$ano=$fctasban->getTasano();
    /*if ($ano)
    {*/
	    /*Enero*/
	    $fctasban_enero = new Fctasban();
	    $fctasban_enero->setTasano($ano);
	    $fctasban_enero->setTasmes("1");
	    $fctasban_enero->setTaspor($fctasban->getEnero());
		$fctasban_enero->save();
	    /*Febrero*/
	    $fctasban_febrero = new Fctasban();
	    $fctasban_febrero->setTasano($ano);
	    $fctasban_febrero->setTasmes("2");
	    $fctasban_febrero->setTaspor($fctasban->getFebrero());
		$fctasban_febrero->save();
	    /*Marzo*/
	    $fctasban_marzo = new Fctasban();
	    $fctasban_marzo->setTasano($ano);
	    $fctasban_marzo->setTasmes("3");
	    $fctasban_marzo->setTaspor($fctasban->getMarzo());
		$fctasban_marzo->save();
	    /*Abril*/
	    $fctasban_abril = new Fctasban();
	    $fctasban_abril->setTasano($ano);
	    $fctasban_abril->setTasmes("4");
	    $fctasban_abril->setTaspor($fctasban->getAbril());
		$fctasban_abril->save();
	    /*Mayo*/
	    $fctasban_mayo = new Fctasban();
	    $fctasban_mayo->setTasano($ano);
	    $fctasban_mayo->setTasmes("5");
	    $fctasban_mayo->setTaspor($fctasban->getMayo());
		$fctasban_mayo->save();
	    /*Junio*/
	    $fctasban_junio = new Fctasban();
	    $fctasban_junio->setTasano($ano);
	    $fctasban_junio->setTasmes("6");
	    $fctasban_junio->setTaspor($fctasban->getJunio());
		$fctasban_junio->save();
	    /*Julio*/
	    $fctasban_julio = new Fctasban();
	    $fctasban_julio->setTasano($ano);
	    $fctasban_julio->setTasmes("7");
	    $fctasban_julio->setTaspor($fctasban->getJulio());
		$fctasban_julio->save();
	    /*Agosto*/
	    $fctasban_agosto = new Fctasban();
	    $fctasban_agosto->setTasano($ano);
	    $fctasban_agosto->setTasmes("8");
	    $fctasban_agosto->setTaspor($fctasban->getAgosto());
		$fctasban_agosto->save();
	    /*Septiembre*/
	    $fctasban_septiembre = new Fctasban();
	    $fctasban_septiembre->setTasano($ano);
	    $fctasban_septiembre->setTasmes("9");
	    $fctasban_septiembre->setTaspor($fctasban->getSeptiembre());
		$fctasban_septiembre->save();
	    /*Octubre*/
	    $fctasban_octubre = new Fctasban();
	    $fctasban_octubre->setTasano($ano);
	    $fctasban_octubre->setTasmes("10");
	    $fctasban_octubre->setTaspor($fctasban->getOctubre());
		$fctasban_octubre->save();
	    /*Noviembre*/
	    $fctasban_noviembre = new Fctasban();
	    $fctasban_noviembre->setTasano($ano);
	    $fctasban_noviembre->setTasmes("11");
	    $fctasban_noviembre->setTaspor($fctasban->getNoviembre());
		$fctasban_noviembre->save();
	     /*Diciembre*/
	    $fctasban_diciembre = new Fctasban();
	    $fctasban_diciembre->setTasano($ano);
	    $fctasban_diciembre->setTasmes("12");
	    $fctasban_diciembre->setTaspor($fctasban->getDiciembre());
	   	$fctasban_diciembre->save();
    /*}*/
    return -1;
  }

}
