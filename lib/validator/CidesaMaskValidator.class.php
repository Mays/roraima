<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfPropelUniqueValidator validates that the uniqueness of a column.
 * This validator only works for single column primary key.
 *
 * <b>Required parameters:</b>
 *
 * # <b>class</b>        - [none]               - Propel class name.
 * # <b>column</b>       - [none]               - Propel column name.
 *
 * <b>Optional parameters:</b>
 *
 * # <b>unique_error</b> - [Uniqueness error]   - An error message to use when
 *                                                the value for this column already
 *                                                exists in the database.
 *
 * @package    symfony
 * @subpackage validator
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @author     Fédéric Coelho <frederic.coelho@symfony-project.com>
 * @version    SVN: $Id: sfPropelUniqueValidator.class.php 2995 2006-12-09 18:01:32Z fabien $
 */
class CidesaMaskValidator extends sfValidator
{
  public function execute(&$value, &$error)
  {
    $className  = ucfirst(strtolower($this->getParameter('class'))).'Peer';
    $columnMask = ucfirst(strtolower($this->getParameter('columnmask')));
    $columnDiv = ucfirst(strtolower($this->getParameter('columndiv')));

    $c = new Criteria();
    $object = call_user_func(array($className, 'doSelectOne'), $c);

    if ($object)
    {
	$method = 'get'.$columnMask;
	$mask = $object->$method();
	$method = 'get'.$columnDiv;
	$div = $object->$method();
	if($mask)
	{
	  
		$tags = explode('-',trim($mask));
		// $regexp = '/^(XXX)*(XXXXX)*$/';

		/*
		([0-9][0-9](-))
		([0-9][0-9](-))
		([0-9][0-9](-)*)

		([0-9][0-9][0-9](-))
		([0-9][0-9](-))
		([0-9][0-9](-))
		([0-9][0-9](-))
		([0-9][0-9])
		*/

		$regexp = '/^';

		foreach ($tags as $index => $t)
		{
			$regexp .= '(';

			$regexp .= str_replace('#','[0-9]',$t);


			if(($index+1)==$div && !(($index+1)==count($tags))) $regexp .= '(-)*)*';
			elseif (($index+1)==count($tags)) $regexp .= ')*';
			else $regexp .= '(-))*';

		}
		
		$regexp .= '$/';
		
		$error = 'El formato introducido no es válido ('.$mask.')';
		
		return (preg_match ($regexp,trim($value)) == 1);

	}
	
	

    }

    return true;
  }

  /**
   * Initialize this validator.
   *
   * @param sfContext The current application context.
   * @param array   An associative array of initialization parameters.
   *
   * @return bool true, if initialization completes successfully, otherwise false.
   */
  public function initialize($context, $parameters = null)
  {
    // initialize parent
    parent::initialize($context);

    // set defaults
    $this->setParameter('unique_error', 'Uniqueness error');

    $this->getParameterHolder()->add($parameters);

    // check parameters
    if (!$this->getParameter('class'))
    {
      throw new sfValidatorException('The "class" parameter is mandatory for the sfPropelUniqueValidator validator.');
    }

    if (!$this->getParameter('columnmask'))
    {
      throw new sfValidatorException('The "columnmask" parameter is mandatory for the sfPropelUniqueValidator validator.');
    }

    if (!$this->getParameter('columndiv'))
    {
      throw new sfValidatorException('The "columndiv" parameter is mandatory for the sfPropelUniqueValidator validator.');
    }

    return true;
  }
}
