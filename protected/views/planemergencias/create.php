<?php
/* @var $this PlanemergenciasController */
/* @var $model Planemergencias */

$this->breadcrumbs=array(
	'Planemergenciases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Planemergencias', 'url'=>array('index')),
	array('label'=>'Manage Planemergencias', 'url'=>array('admin')),
);
?>

<h1>Create Planemergencias</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>