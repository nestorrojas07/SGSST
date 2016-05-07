<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
);
?>

<h1><font color="#336699">Crear</font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>