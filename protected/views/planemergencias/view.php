<?php
/* @var $this PlanemergenciasController */
/* @var $model Planemergencias */

$this->breadcrumbs=array(
	'Planemergenciases'=>array('index'),
	$model->IdPlan,
);

$this->menu=array(
	array('label'=>'List Planemergencias', 'url'=>array('index')),
	array('label'=>'Create Planemergencias', 'url'=>array('create')),
	array('label'=>'Update Planemergencias', 'url'=>array('update', 'id'=>$model->IdPlan)),
	array('label'=>'Delete Planemergencias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdPlan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Planemergencias', 'url'=>array('admin')),
);
?>

<h1>View Planemergencias #<?php echo $model->IdPlan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdPlan',
		'Fecha',
		'Plan',
	),
)); ?>
