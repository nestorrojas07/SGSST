<?php
/* @var $this VencimientosController */
/* @var $model Vencimientos */

$this->breadcrumbs=array(
	'Vencimientoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Vencimientos', 'url'=>array('index')),
	array('label'=>'Create Vencimientos', 'url'=>array('create')),
	array('label'=>'Update Vencimientos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vencimientos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vencimientos', 'url'=>array('admin')),
);
?>

<h1>View Vencimientos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'Insumo',
		'estado',
	),
)); ?>
