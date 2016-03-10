<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'Historiaclinicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Historiaclinica', 'url'=>array('index')),
	array('label'=>'Manage Historiaclinica', 'url'=>array('admin')),
);
?>

<h1>Create Historiaclinica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>