<?php 

class BrigadaTest extends PHPUnit_Framework_TestCase
{
	 public $fixtures=array(
        'brigadas'=>'Brigada',
    );

	 public function testBase()
	 {
		//$brigada=$this->brigadas['test1'];
	 	//$this->asserTrue($brigada->Funcion == 'ninguna');	 
	 	$brigadas=Brigada::model()->findAll();
	 	$this->assertEquals(count($brigadas),1);
    
	}
}

 ?>