<?php
/**
 *	PHP Helper Functions
 * 
 *	This file contains general PHP functions that 
 *  I find myself writing a lot.
 *
 * 	@author Michael Succi <michael@pilotinteractive.ca>
 * 	@version 1.0
 */
class Utilities
{
	function __construct()
	{

	}

	public function doKeysExist($keys, $haystack, $prev_key = null)
	{
		// Make sure both arrays are, in fact, arrays
		if(!is_array($keys) || !is_array($haystack))
	    { 
	        return false;
	    }

	    // Check to see if the array is empty and if the previous
	    // element we passed is null. This means the array was
	    // initially empty.
	    if(count($keys) == 0 && empty($prev_key))
	    {
	    	return false;
	    }
	    else if(count($keys) == 0)
	    {
	    	return true;
	    }

	    // Shifts first value of array off
	    $key = array_shift($keys);
	    if (in_array($key, $haystack))
	    {
	    	return $this->doKeysExist($keys, $haystack, $key);
	    }
	    else
	    {
	    	return false;
	    }
	}
}
