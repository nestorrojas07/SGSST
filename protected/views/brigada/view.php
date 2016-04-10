<?php
/* @var $this BrigadaController */
/* @var $model Brigada */

$this->breadcrumbs=array(
	'Brigadas'=>array('index'),
	$model->IdBrigada,
);

$this->menu=array(
	array('label'=>'List Brigada', 'url'=>array('index')),
	array('label'=>'Create Brigada', 'url'=>array('create')),
	array('label'=>'Update Brigada', 'url'=>array('update', 'id'=>$model->IdBrigada)),
	array('label'=>'Delete Brigada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdBrigada),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brigada', 'url'=>array('admin')),
);
?>

<h1>View Brigada #<?php echo $model->IdBrigada; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdBrigada',
		'Funcion',
		'Descripcion_funcion',
		'IdPlanEmergencias',
	),
)); ?>
