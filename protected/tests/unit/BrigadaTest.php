<?php 
/**
	Prueba unitaria del modelo Brigada
*/
class BrigadaTest extends PHPUnit_Framework_TestCase
{	
	/**
		Arreglo con el cual se llama el fixture del modelo brigada.
	*/
	 public $fixtures=array(
        'brigadas'=>'Brigada',
    );
	 /**
		Prueba sencilla del fixture cargado.
	*/
	 public function testBase()
	 {
	 	$brigadas=Brigada::model()->findAll();
	 	$this->assertEquals(count($brigadas),1);    
	}
}

 ?>