<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cronograma', 'url'=>array('index')),
	array('label'=>'Manage Cronograma', 'url'=>array('admin')),
);
?>

<h1>Create Cronograma</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>