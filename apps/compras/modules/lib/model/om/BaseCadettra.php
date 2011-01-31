<?php


abstract class BaseCadettra extends BaseObject  implements Persistent {


	
	protected static $peer;


	
	protected $codtra;


	
	protected $codart;


	
	protected $canart;


	
	protected $numlotori;


	
	protected $numlotdes;


	
	protected $id;

	
	protected $alreadyInSave = false;

	
	protected $alreadyInValidation = false;

  
  public function getCodtra()
  {

    return trim($this->codtra);

  }
  
  public function getCodart()
  {

    return trim($this->codart);

  }
  
  public function getCanart($val=false)
  {

    if($val) return number_format($this->canart,2,',','.');
    else return $this->canart;

  }
  
  public function getNumlotori()
  {

    return trim($this->numlotori);

  }
  
  public function getNumlotdes()
  {

    return trim($this->numlotdes);

  }
  
  public function getId()
  {

    return $this->id;

  }
	
	public function setCodtra($v)
	{

    if ($this->codtra !== $v) {
        $this->codtra = $v;
        $this->modifiedColumns[] = CadettraPeer::CODTRA;
      }
  
	} 
	
	public function setCodart($v)
	{

    if ($this->codart !== $v) {
        $this->codart = $v;
        $this->modifiedColumns[] = CadettraPeer::CODART;
      }
  
	} 
	
	public function setCanart($v)
	{

    if ($this->canart !== $v) {
        $this->canart = Herramientas::toFloat($v);
        $this->modifiedColumns[] = CadettraPeer::CANART;
      }
  
	} 
	
	public function setNumlotori($v)
	{

    if ($this->numlotori !== $v) {
        $this->numlotori = $v;
        $this->modifiedColumns[] = CadettraPeer::NUMLOTORI;
      }
  
	} 
	
	public function setNumlotdes($v)
	{

    if ($this->numlotdes !== $v) {
        $this->numlotdes = $v;
        $this->modifiedColumns[] = CadettraPeer::NUMLOTDES;
      }
  
	} 
	
	public function setId($v)
	{

    if ($this->id !== $v) {
        $this->id = $v;
        $this->modifiedColumns[] = CadettraPeer::ID;
      }
  
	} 
  
  public function hydrate(ResultSet $rs, $startcol = 1)
  {
    try {

      $this->codtra = $rs->getString($startcol + 0);

      $this->codart = $rs->getString($startcol + 1);

      $this->canart = $rs->getFloat($startcol + 2);

      $this->numlotori = $rs->getString($startcol + 3);

      $this->numlotdes = $rs->getString($startcol + 4);

      $this->id = $rs->getInt($startcol + 5);

      $this->resetModified();

      $this->setNew(false);

      $this->afterHydrate();

            return $startcol + 6; 
    } catch (Exception $e) {
      throw new PropelException("Error populating Cadettra object", $e);
    }
  }


  protected function afterHydrate()
  {

  }
    
  
  public function __call($m, $a)
    {
      $prefijo = substr($m,0,3);
    $metodo = strtolower(substr($m,3));
        if($prefijo=='get'){
      if(isset($this->$metodo)) return $this->$metodo;
      else return '';
    }elseif($prefijo=='set'){
      if(isset($this->$metodo)) $this->$metodo = $a[0];
    }else call_user_func_array($m, $a);

    }

	
	public function delete($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CadettraPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			CadettraPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	public function save($con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(CadettraPeer::DATABASE_NAME);
		}

		try {
			$con->begin();
			$affectedRows = $this->doSave($con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollback();
			throw $e;
		}
	}

	
	protected function doSave($con)
	{
		$affectedRows = 0; 		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


						if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = CadettraPeer::doInsert($this, $con);
					$affectedRows += 1; 										 										 
					$this->setId($pk);  
					$this->setNew(false);
				} else {
					$affectedRows += CadettraPeer::doUpdate($this, $con);
				}
				$this->resetModified(); 			}

			$this->alreadyInSave = false;
		}
		return $affectedRows;
	} 
	
	protected $validationFailures = array();

	
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = CadettraPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CadettraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->getByPosition($pos);
	}

	
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getCodtra();
				break;
			case 1:
				return $this->getCodart();
				break;
			case 2:
				return $this->getCanart();
				break;
			case 3:
				return $this->getNumlotori();
				break;
			case 4:
				return $this->getNumlotdes();
				break;
			case 5:
				return $this->getId();
				break;
			default:
				return null;
				break;
		} 	}

	
	public function toArray($keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CadettraPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getCodtra(),
			$keys[1] => $this->getCodart(),
			$keys[2] => $this->getCanart(),
			$keys[3] => $this->getNumlotori(),
			$keys[4] => $this->getNumlotdes(),
			$keys[5] => $this->getId(),
		);
		return $result;
	}

	
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = CadettraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setCodtra($value);
				break;
			case 1:
				$this->setCodart($value);
				break;
			case 2:
				$this->setCanart($value);
				break;
			case 3:
				$this->setNumlotori($value);
				break;
			case 4:
				$this->setNumlotdes($value);
				break;
			case 5:
				$this->setId($value);
				break;
		} 	}

	
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = CadettraPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setCodtra($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setCodart($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setCanart($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNumlotori($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setNumlotdes($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setId($arr[$keys[5]]);
	}

	
	public function buildCriteria()
	{
		$criteria = new Criteria(CadettraPeer::DATABASE_NAME);

		if ($this->isColumnModified(CadettraPeer::CODTRA)) $criteria->add(CadettraPeer::CODTRA, $this->codtra);
		if ($this->isColumnModified(CadettraPeer::CODART)) $criteria->add(CadettraPeer::CODART, $this->codart);
		if ($this->isColumnModified(CadettraPeer::CANART)) $criteria->add(CadettraPeer::CANART, $this->canart);
		if ($this->isColumnModified(CadettraPeer::NUMLOTORI)) $criteria->add(CadettraPeer::NUMLOTORI, $this->numlotori);
		if ($this->isColumnModified(CadettraPeer::NUMLOTDES)) $criteria->add(CadettraPeer::NUMLOTDES, $this->numlotdes);
		if ($this->isColumnModified(CadettraPeer::ID)) $criteria->add(CadettraPeer::ID, $this->id);

		return $criteria;
	}

	
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(CadettraPeer::DATABASE_NAME);

		$criteria->add(CadettraPeer::ID, $this->id);

		return $criteria;
	}

	
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setCodtra($this->codtra);

		$copyObj->setCodart($this->codart);

		$copyObj->setCanart($this->canart);

		$copyObj->setNumlotori($this->numlotori);

		$copyObj->setNumlotdes($this->numlotdes);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); 
	}

	
	public function copy($deepCopy = false)
	{
				$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new CadettraPeer();
		}
		return self::$peer;
	}

} 