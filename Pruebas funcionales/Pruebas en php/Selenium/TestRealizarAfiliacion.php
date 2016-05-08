<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://52.26.115.127/yii/sgsst/")
    $this->open("/yii/SGSST/index.php");
    $this->click("link=Afiliaciones");
    $this->waitForPageToLoad("30000");
    $this->type("id=LoginForm_username", "admin");
    $this->type("id=LoginForm_password", "admin");
    $this->click("name=yt0");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->waitForPageToLoad("30000");
    $this->select("id=TrabajadorAfiliaciones_Cedula", "label=1094899656");
    $this->select("id=TrabajadorAfiliaciones_IdAfiliaciones", "label=Asmed salud");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->select("id=TrabajadorAfiliaciones_IdAfiliaciones", "label=Proteccion");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->select("id=TrabajadorAfiliaciones_IdAfiliaciones", "label=SURA");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt3");
    $this->assertEquals("Seguro que desea remover la afiliacion entre SURA y 1094899656", $this->getConfirmation());
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>