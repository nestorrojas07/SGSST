<?php
/* @var $this VencimientosController */
/* @var $model Vencimientos */

$this->breadcrumbs=array(
	'Insumos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de insumos', 'url'=>array('index')),
);
?>

<h1><font color="#336699">Crear Insumo</font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>