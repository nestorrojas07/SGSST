<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'Historiaclinicas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Historias clinicas', 'url'=>array('index')),
	#array('label'=>'Manage Historiaclinica', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Crear Historia clinica</font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>