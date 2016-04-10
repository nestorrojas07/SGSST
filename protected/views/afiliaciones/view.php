<?php
/* @var $this AfiliacionesController */
/* @var $model Afiliaciones */

$this->breadcrumbs=array(
	'Afiliaciones'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Afiliaciones', 'url'=>array('index')),
	array('label'=>'Create Afiliaciones', 'url'=>array('create')),
	array('label'=>'Update Afiliaciones', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Afiliaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Afiliaciones', 'url'=>array('admin')),
);
?>

<h1>View Afiliaciones #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
		'Descripcion',
		'Fecha',
	),
)); ?>
