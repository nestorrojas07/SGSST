<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de Trabajadores', 'url'=>array('index')),
	#array('label'=>'Administrar Trabajadores', 'url'=>array('admin')),
);
?>

<h1><strong><font color="#336699">Crear Trabajador</font></strong></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>