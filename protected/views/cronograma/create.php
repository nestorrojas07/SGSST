<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Cronogramas', 'url'=>array('index')),
);
?>

<h1><font color="#336699">Crear Cronograma</font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>