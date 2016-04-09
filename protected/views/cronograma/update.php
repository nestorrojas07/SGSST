<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Cronogramas', 'url'=>array('index')),
	array('label'=>'Crear Cronograma', 'url'=>array('create')),
	array('label'=>'Ver Cronograma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Cronogramas', 'url'=>array('admin')),
);
?>

<h1>Update Cronograma <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>