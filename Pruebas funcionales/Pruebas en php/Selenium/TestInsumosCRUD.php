<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://52.26.115.127/yii/sgsst/")
    $this->open("/yii/sgsst/index.php");
    $this->click("link=Login");
    $this->waitForPageToLoad("30000");
    $this->type("id=LoginForm_username", "admin");
    $this->type("id=LoginForm_password", "admin");
    $this->click("name=yt0");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Insumos");
    $this->waitForPageToLoad("30000");
    $this->click("link=Crear insumo");
    $this->waitForPageToLoad("30000");
    $this->type("id=Vencimientos_Nombre", "Prueba");
    $this->click("id=Vencimientos_fecha_Vencimiento");
    $this->click("link=18");
    $this->type("id=Vencimientos_Instrucciones", "Preubas");
    $this->select("id=Vencimientos_Cedula_Trabajador", "label=Mauricio A. Ramirez");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Actualizar insumo");
    $this->waitForPageToLoad("30000");
    $this->select("id=Vencimientos_Cedula_Trabajador", "label=Paola Alejandra Arevalo");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->assertTrue((bool)preg_match('/^Seguro que desea eliminar este insumo[\s\S]$/',$this->getConfirmation()));
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>