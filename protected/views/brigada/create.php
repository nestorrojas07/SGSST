<?php
/* @var $this BrigadaController */
/* @var $model Brigada */

$this->breadcrumbs=array(
	'Brigadas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Brigadas', 'url'=>array('index')),
	#array('label'=>'Manage Brigada', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Crear Brigada</font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>