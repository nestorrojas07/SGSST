<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->Descripcion=>array('view','id'=>$model->id),
	'Registrar asistentes',
);

$this->menu=array(
	array('label'=>'Lista de Cronogramas', 'url'=>array('index')),
	#array('label'=>'Create Cronograma', 'url'=>array('create')),
	array('label'=>'Ver Cronograma', 'url'=>array('view', 'id'=>$model->id)),
	#array('label'=>'Manage Cronograma', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Registrar asistentes a: </font><font color="black"><?php echo $model->Descripcion; ?></font></h1>

<br>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>