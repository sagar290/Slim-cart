<?php 

namespace Cart\Basket\Exceptions;

use Exception;

class QuantityExceededException extends Exception 
{
	protected $message = 'You have added maximum stock for this item.';


}