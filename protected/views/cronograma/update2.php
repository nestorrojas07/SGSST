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
	array('label'=>'Ver Cronograma', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1><font color="#336699">Registrar asistentes a: </font><font color="black"><?php echo $model->Descripcion; ?></font></h1>


<?php Yii::app()->user->setFlash("info","Se citaron a ".$model->PersonasProgramadas." personas para este cronograma"); ?>

<br>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>