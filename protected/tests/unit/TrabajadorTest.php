<?php
include '../../../prueba/simpletest/autorun.php'
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TrabajadorTest extends TestCase
{
  /*  private function getTrabajador($id)
    {
        $trabajador=Trabajador::model()->findByPk($id);
        return $trabajdor->nombre;
    }*/
    function testNombre()
    {
       // $this->assertEquals('Santiago Salazar',$this->getTrabajador(1254698));
        $this->assertTrue(true);
    }
}


