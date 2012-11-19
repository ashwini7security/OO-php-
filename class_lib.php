
<?php
/**
 *@author:- Ashwini Kumar
 *@program:- basic class with constructor , access modifiers 
 *@date:- 9th november 2012
 *@status:-
 */

class person{
	
	var $name; //these are called properties
	public $height = "i am chotu" ;
	protected $social_insurance = 786;
	private $pin_number = 414001;
	
/** 
 *Creating constructor. In php when you create 
 *object it will automatically call method 
 *__construt(). constructor give you properties
 *values.It you choice to specifically write
 *__construct() method.
 *
 *
 */
	function __construct($person_name)
	{
		$this->name=$person_name;
	}
//protected function only use by inherit classes.
	protected function set_name($new_name)
	{
		if(name != "Ashwini kumar")
		{
			$this->name = strtoupper($new_name);
		}



	}

	function get_name()
	{
		return $this->name;
	}

//using access modifier private
	private function get_pin_number()
	{
		return $this->$pin_number;
	    
	}
}

//performing inheritence :)


class employee extends person 
{
	function __construct($employee_name)
	{
		$this->set_name($employee_name);

	}

//performing overriding 
	protected function set_name($new_name)
	{
		if (name == "vikash")
	
			$this->name == $new_name;
}























?>
