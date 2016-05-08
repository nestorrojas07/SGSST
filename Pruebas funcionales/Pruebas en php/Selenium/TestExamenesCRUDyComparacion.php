<?php

require_once 'Testing/Selenium.php';

class Example extends PHPUnit_Framework_TestCase
{
  protected function setUp()
  {
    $this = new Testing_Selenium("*chrome", "http://52.26.115.127/yii/sgsst/")
    $this->open("/yii/SGSST/index.php");
    $this->click("link=Trabajadores");
    $this->waitForPageToLoad("30000");
    $this->type("id=LoginForm_username", "admin");
    $this->type("id=LoginForm_password", "admin");
    $this->click("name=yt0");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=1254698");
    $this->waitForPageToLoad("30000");
    $this->click("link=Se solicita examen medico general para realizar la contratacion");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->waitForPageToLoad("30000");
    $this->select("id=Examenes_Tipo", "label=Examen de ingreso");
    $this->click("id=Examenes_Fecha");
    $this->click("link=27");
    $this->type("id=Examenes_Descripcion", "Ninguno");
    $this->type("id=Examenes_Diagnostico", "Ninguno");
    $this->select("id=Examenes_IdHistoriaClinica", "label=1254698 - Se solicita examen medico general para realizar la contratacion");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("xpath=(//a[contains(text(),'Examen de ingreso')])[2]");
    $this->waitForPageToLoad("30000");
    $this->click("link=Actualizar Examen");
    $this->waitForPageToLoad("30000");
    $this->select("id=Examenes_Tipo", "label=Examen periodico");
    $this->click("id=Examenes_Fecha");
    $this->click("link=25");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Examen periodico");
    $this->waitForPageToLoad("30000");
    $this->click("link=Actualizar Examen");
    $this->waitForPageToLoad("30000");
    $this->select("id=Examenes_Tipo", "label=Examen de egreso");
    $this->click("id=Examenes_Fecha");
    $this->click("//form[@id='examenes-form']/div[2]");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt1");
    $this->waitForPageToLoad("30000");
    $this->click("link=Ver Historia clinica");
    $this->waitForPageToLoad("30000");
    $this->click("link=Examen de egreso");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->assertTrue((bool)preg_match('/^Seguro que desea eliminar este examen[\s\S]$/',$this->getConfirmation()));
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>