<?php

class NewClass{
	public $data="I am a property";
	public function __construct(){
		echo "This class has been instantioted <br>";
	}
	public function steNewProperty($newdata){
		$this->data=$newdata;
	}
	public function getProperty(){
		return $this->data;
	}
	public function __destruct(){
		echo "<br> This is the end of the class!";
	}
}

