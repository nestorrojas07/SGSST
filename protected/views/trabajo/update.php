<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->Id)),
);
?>

<h1><font color="#336699">Actualizar</font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>