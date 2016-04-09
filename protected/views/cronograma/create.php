<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Cronogramas', 'url'=>array('index')),
	array('label'=>'Administrar Cronogramas', 'url'=>array('admin')),
);
?>

<h1>Create Cronograma</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>