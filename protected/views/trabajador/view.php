<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadors'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'List Trabajador', 'url'=>array('index')),
	array('label'=>'Create Trabajador', 'url'=>array('create')),
	array('label'=>'Update Trabajador', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Delete Trabajador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Trabajador', 'url'=>array('admin')),
);
?>

<h1>View Trabajador #<?php echo $model->Cedula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'Cedula',
		'Nombre',
		'Telefono',
		#'Foto_Link',
		'Correo',
		'Titulo_academico',
		'experiencia',
		'ausencias',
		'IdBrigada',
		'IdTrabajo',
	),
)); ?>
