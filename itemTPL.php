<?php
class Template{
	public $output;
	public $file;
	public $values = array();
	
	function _construct($file){
		$this->file = $file;
		$this->output = file_get_contents($this->file);
	}
	
	function set($key, $value){
		$this->values[$key] = $value;
	}
	
	function output(){
		foreach($this->values as $key=>$value){
			$tagsToReplace = "[$key]";
			$this->output = str_replace($tagsToReplace, $value, $this->output);	
		}
		return $this->output;
	}
}


?>