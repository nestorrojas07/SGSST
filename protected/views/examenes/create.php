<?php
/* @var $this ExamenesController */
/* @var $model Examenes */

$this->breadcrumbs=array(
	'Examenes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Examenes', 'url'=>array('index')),
	array('label'=>'Manage Examenes', 'url'=>array('admin')),
);
?>

<h1>Create Examenes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>