<?php
/* @var $this BrigadaController */
/* @var $model Brigada */

$this->breadcrumbs=array(
	'Brigadas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Brigada', 'url'=>array('index')),
	array('label'=>'Manage Brigada', 'url'=>array('admin')),
);
?>

<h1>Create Brigada</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>