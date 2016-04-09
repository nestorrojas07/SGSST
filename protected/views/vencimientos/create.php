<?php
/* @var $this VencimientosController */
/* @var $model Vencimientos */

$this->breadcrumbs=array(
	'Vencimientoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vencimientos', 'url'=>array('index')),
	array('label'=>'Manage Vencimientos', 'url'=>array('admin')),
);
?>

<h1>Create Vencimientos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>