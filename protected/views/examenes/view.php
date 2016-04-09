<?php
/* @var $this ExamenesController */
/* @var $model Examenes */

$this->breadcrumbs=array(
	'Examenes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Examenes', 'url'=>array('index')),
	array('label'=>'Create Examenes', 'url'=>array('create')),
	array('label'=>'Update Examenes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Examenes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Examenes', 'url'=>array('admin')),
);
?>

<h1>View Examenes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Descripcion',
		'Fecha',
		'Diagnostico',
	),
)); ?>
