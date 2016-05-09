<?php 
/**
	Componente de prueba realizado para conocer mejor el funcionamiento de los mismos. Es ageno al proyecto.
*/
class CRecordatorio extends CApplicationComponent
{
	/**
		Imprime el valor del metodo hola.
	*/
	public function init()
	{
		echo $this->hola();
	}
	/**
		Retorna la fecha actual.
	*/
	public function hola()
	{
		return date("Y-m-d");
	}
}

 