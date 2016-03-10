<?php
/* @var $this AfiliacionesController */
/* @var $model Afiliaciones */

$this->breadcrumbs=array(
	'Afiliaciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Afiliaciones', 'url'=>array('index')),
	array('label'=>'Manage Afiliaciones', 'url'=>array('admin')),
);
?>

<h1>Create Afiliaciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>