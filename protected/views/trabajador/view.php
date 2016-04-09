<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadores'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'Lista de Trabajadores', 'url'=>array('index')),
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Actualizar Trabajador', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Eliminar Trabajador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Seguro que desea eliminar este trabajador?')),
	array('label'=>'Administrar Trabajadores', 'url'=>array('admin')),
);
?>

<h2>Trabajador: <font color="black"><?php echo $model->Cedula; ?></font></h2>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'Cedula',
		'Nombre',
		'Telefono',
		'Correo',
		'nivel_academico',
		'experiencia',
		'ausencias',
		'Trabajador_Afiliaciones',
		'Trabajador_HistoriaClinica',
		'trabajador_trabajo',
	),
)); ?>
