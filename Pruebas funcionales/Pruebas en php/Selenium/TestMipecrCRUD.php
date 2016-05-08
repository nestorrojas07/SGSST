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
    $this->click("link=MIPECR");
    $this->waitForPageToLoad("30000");
    $this->click("link=Crear");
    $this->waitForPageToLoad("30000");
    $this->type("id=Trabajo_proceso", "Prueba");
    $this->type("id=Trabajo_zona", "Prueba");
    $this->type("id=Trabajo_actividad", "Ninguna");
    $this->type("id=Trabajo_tarea", "Ninguna");
    $this->select("id=Trabajo_rutinaria", "label=si");
    $this->type("id=Trabajo_peligro_descripcion", "Ninguno");
    $this->select("id=Trabajo_peligro_clasificacion", "label=Fisicos");
    $this->type("id=Trabajo_peligro__efectosPosibles", "Ninguno");
    $this->select("id=Trabajo_evaluacion_riesgo_nivel_deficiencia", "label=6");
    $this->select("id=Trabajo_evaluacion_riesgo_nivel_exposicion", "label=3");
    $this->select("id=Trabajo_evaluacion_riesgo_nivel_consecuencia", "label=100");
    $this->type("id=Trabajo_criterio_peor_consecuencia", "Ninguna");
    $this->select("id=Trabajo_criterio_requisito_legal", "label=si");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("link=Prueba");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt2");
    $this->waitForPageToLoad("30000");
    $this->click("link=Principal");
    $this->waitForPageToLoad("30000");
    $this->click("link=Actualizar");
    $this->waitForPageToLoad("30000");
    $this->select("id=Trabajo_evaluacion_riesgo_nivel_exposicion", "label=2");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->select("id=Trabajo_peligro_clasificacion", "label=Fisicos");
    $this->select("id=Trabajo_evaluacion_riesgo_nivel_deficiencia", "label=6");
    $this->select("id=Trabajo_evaluacion_riesgo_nivel_consecuencia", "label=25");
    $this->click("name=yt0");
    $this->waitForPageToLoad("30000");
    $this->click("id=yt5");
    $this->assertTrue((bool)preg_match('/^Are you sure you want to delete this item[\s\S]$/',$this->getConfirmation()));
    $this->click("link=Logout (admin)");
    $this->waitForPageToLoad("30000");
  }
}
?>