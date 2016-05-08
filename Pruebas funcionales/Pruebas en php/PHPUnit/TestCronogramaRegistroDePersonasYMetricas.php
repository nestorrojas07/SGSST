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
    $this->click("link=Cronogramas");
    $this->waitForPageToLoad("30000");
    $this->type("id=LoginForm_username", "admin");
    $this->type("id=LoginForm_password", "admin");
    $this->click("name=yt0");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Entrega #2 del proyecto");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->waitForPageToLoad("30000");
    $this->type("id=Cronograma_PersonasAsistieron", "85");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->type("id=Cronograma_PersonasAsistieron", "5");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->type("id=Cronograma_PersonasAsistieron", "2");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Lista de Cronogramas");
    $this->waitForPageToLoad("30000");
    $this->click("link=Entrega #2 del proyecto");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt0");
    $this->waitForPageToLoad("30000");
    $this->type("id=Cronograma_PersonasAsistieron", "3");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Lista de Cronogramas");
    $this->waitForPageToLoad("30000");
    $this->click("//div[@id='yw0']/div[2]/div[3]/div/h4/a/span");
    $this->waitForPageToLoad("30000");
    $this->click("//div[@id='yw0']/div[2]/div[3]/div/h4/a/span");
    $this->waitForPageToLoad("30000");
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>