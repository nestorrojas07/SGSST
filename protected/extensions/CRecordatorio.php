<?php 
class CRecordatorio extends CApplicationComponent
{
	public function init()
	{
		echo $this->hola();
	}

	public function hola()
	{
		return date("Y-m-d");
	}
}

 