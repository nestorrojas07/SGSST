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
    $this->click("link=Trabajadores");
    $this->waitForPageToLoad("30000");
    $this->click("link=Crear Trabajador");
    $this->waitForPageToLoad("30000");
    $this->type("id=Trabajador_Cedula", "Prueba");
    $this->type("id=Trabajador_Nombre", "Prueba");
    $this->type("id=Trabajador_Cedula", "123456");
    $this->type("id=Trabajador_Telefono", "123456");
    $this->type("id=Trabajador_Correo", "Prueba");
    $this->type("id=Trabajador_Titulo_academico", "Ninguno");
    $this->type("id=Trabajador_experiencia", "Ninguna");
    $this->select("id=Trabajador_IdBrigada", "label=Evacuacion");
    $this->select("id=Trabajador_IdTrabajo", "label=Sistermatización de la información");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Actualizar Trabajador");
    $this->waitForPageToLoad("30000");
    $this->type("id=Trabajador_Nombre", "Prueba2");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt1");
    $this->assertTrue((bool)preg_match('/^Seguro que desea eliminar este trabajador[\s\S]$/',$this->getConfirmation()));
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>