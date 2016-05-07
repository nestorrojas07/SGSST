<?php
/* @var $this ExamenesController */
/* @var $model Examenes */

$this->breadcrumbs=array(
	'Examenes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Examenes', 'url'=>array('index')),
	array('label'=>'Ver Examen', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h1><font color="#336699">Actualizar: </font> <font color="black"><?php echo $model->Tipo; ?></font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>