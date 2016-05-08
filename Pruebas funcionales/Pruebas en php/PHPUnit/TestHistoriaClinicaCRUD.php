<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://52.26.115.127/yii/sgsst/");
  }

  public function testMyTestCase()
  {
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
    $this->click("id=yt0");
    $this->waitForPageToLoad("30000");
    $this->type("id=Historiaclinica_Descripcion", "Prueba");
    $this->select("id=Historiaclinica_Cedula_trabajador", "label=Santiago Salazar");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Prueba");
    $this->waitForPageToLoad("30000");
    $this->click("link=Actualizar Historia clinica");
    $this->waitForPageToLoad("30000");
    $this->select("id=Historiaclinica_Cedula_trabajador", "label=Paola Alejandra Arevalo");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Prueba");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt2");
    $this->assertTrue((bool)preg_match('/^Seguro que desea eliminar esta historia clinica[\s\S]$/',$this->getConfirmation()));
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>