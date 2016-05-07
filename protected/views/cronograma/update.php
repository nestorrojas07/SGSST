<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->Descripcion=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Cronogramas', 'url'=>array('index')),
	array('label'=>'Ver Cronograma', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1><font color="#336699">Actualizar Cronograma: </font><font color="black"><?php echo $model->Descripcion; ?></font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>