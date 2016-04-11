<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'Historiaclinicas'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Historias clinicas', 'url'=>array('index')),
	#array('label'=>'Create Historiaclinica', 'url'=>array('create')),
	array('label'=>'Ver Historia clinica', 'url'=>array('view', 'id'=>$model->Id)),
	#array('label'=>'Manage Historiaclinica', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Actualizar Historia clinica de: </font><font color="black"> <?php echo $model->getNombreTrabajador($model->Cedula_trabajador); ?></font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>