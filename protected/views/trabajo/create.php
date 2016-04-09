<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'Trabajos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Trabajo', 'url'=>array('index')),
	array('label'=>'Manage Trabajo', 'url'=>array('admin')),
);
?>

<h1>Create Trabajo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>