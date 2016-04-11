<?php
/* @var $this AfiliacionesController */
/* @var $model Afiliaciones */

$this->breadcrumbs=array(
	'Afiliaciones'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Afiliaciones', 'url'=>array('index')),
	#array('label'=>'Manage Afiliaciones', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Crear Afiliación</font></h1></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>