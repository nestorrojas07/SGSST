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
    $this->open("/yii/sgsst/index.php");
    $this->click("link=Login");
    $this->waitForPageToLoad("30000");
    $this->type("id=LoginForm_username", "admin");
    $this->type("id=LoginForm_password", "admin");
    $this->click("name=yt0");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Afiliaciones");
    $this->waitForPageToLoad("30000");
    $this->click("link=Crear Afiliación");
    $this->waitForPageToLoad("30000");
    $this->type("id=Afiliaciones_Nombre", "Prueba");
    $this->type("id=Afiliaciones_Descripcion", "Prueba");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Actualizar Afiliación");
    $this->waitForPageToLoad("30000");
    $this->type("id=Afiliaciones_Nombre", "Prueba2");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->assertTrue((bool)preg_match('/^Seguro que desea eliminar esta efiliación[\s\S]$/',$this->getConfirmation()));
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>