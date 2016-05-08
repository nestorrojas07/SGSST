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
    $this->click("link=Cronogramas");
    $this->waitForPageToLoad("30000");
    $this->type("id=LoginForm_username", "admin");
    $this->type("id=LoginForm_password", "admin");
    $this->click("name=yt0");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Crear Cronograma");
    $this->waitForPageToLoad("30000");
    $this->type("id=Cronograma_Descripcion", "Prueba");
    $this->click("id=Cronograma_Fecha");
    $this->click("link=27");
    $this->type("id=Cronograma_PersonasProgramadas", "4");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Actualizar Cronograma");
    $this->waitForPageToLoad("30000");
    $this->type("id=Cronograma_PersonasProgramadas", "3");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt1");
    $this->assertTrue((bool)preg_match('/^Seguro que desea eliminar este cronograma[\s\S]$/',$this->getConfirmation()));
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>