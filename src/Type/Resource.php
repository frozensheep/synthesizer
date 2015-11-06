<?php
/**
*	File Containing the Resource class.
*
*	@package	Frozensheep\Synthesize
*	@author		Jacob Wyke <jacob@frozensheep.com>
*	@license	MIT
*
*/

namespace Frozensheep\Synthesize\Type;

use Frozensheep\Synthesize\Type\Type;

/**
*	Resource Class
*
*	A resource data class.
*
*	@package	Frozensheep\Synthesize
*
*/
class Resource extends Type {

	/**
	*	Is Valid Method
	*
	*	Checks to see if the value is valud for the given data type.
	*	@param mixed $mixValue The value to check.
	*	@return bool
	*/
	public function isValid($mixValue){
		if(is_resource($mixValue)){
			return true;
		}
		return false;
	}
}