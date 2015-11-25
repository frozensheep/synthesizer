<?php
/**
*	File Containing the EnumObject class.
*
*	@package	Frozensheep\Synthesize
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\Synthesize\Type;

use Frozensheep\Synthesize\Type\Type;
use Frozensheep\Synthesize\Exception\ClassException;

/**
*	Enum Object Class
*
*	An enum data class.
*
*	@package	Frozensheep\Synthesize
*
*/
class EnumObject extends Type {

	/**
	*	Setup Method
	*
	*	Called after the object is created by the TypeFactory to finish any setup required.
	*	@return void
	*/
	public function setup(){

	}

	/**
	*	Get Value Method
	*
	*	Returns the value for the property.
	*	@return mixed
	*/
	public function getValue(){
		if(is_object($this->mixValue)){
			return $this->mixValue;
		}

		return null;
	}

	/**
	*	Set Value Method
	*
	*	Sets the value for the property.
	*	@param mixed $mixValue The value to check.
	*	@throws TypeException if valud is not valid.
	*	@return bool
	*/
	public function setValue($mixValue){
		if($this->hasOption('class')){
			$strClass = $this->options()->class;
			$this->mixValue = new $strClass($mixValue);
		}else{
			throw new \Exception;
		}
	}

	/**
	*	JSON Serialise Method
	*
	*	Method for the \JsonSerializable Interface.
	*	@return mixed
	*/
	public function jsonSerialize(){
		return $this->getValue();
	}
}