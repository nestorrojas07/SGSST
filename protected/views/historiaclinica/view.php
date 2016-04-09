<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'Historiaclinicas'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Historiaclinica', 'url'=>array('index')),
	array('label'=>'Create Historiaclinica', 'url'=>array('create')),
	array('label'=>'Update Historiaclinica', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Historiaclinica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Historiaclinica', 'url'=>array('admin')),
);
?>

<h1>View Historiaclinica #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Descripcion',
		'Examenes',
	),
)); ?>
