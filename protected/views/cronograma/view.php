<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Cronograma', 'url'=>array('index')),
	array('label'=>'Create Cronograma', 'url'=>array('create')),
	array('label'=>'Update Cronograma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Cronograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cronograma', 'url'=>array('admin')),
);
?>

<h1>View Cronograma #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'Descripcion',
		'Fecha',
		'estado',
	),
)); ?>
