<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadores'=>array('index'),
	$model->Cedula=>array('view','id'=>$model->Cedula),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Trabajadores', 'url'=>array('index')),
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Ver Trabajador', 'url'=>array('view', 'id'=>$model->Cedula)),
	#array('label'=>'Administrar Trabajadores', 'url'=>array('admin')),
);
?>

<h1><strong><font color="#336699">Actualizar Trabajador: <?php echo $model->Cedula; ?></font></strong></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>