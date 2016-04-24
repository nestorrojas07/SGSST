<?php
/* @var $this TrabajoController */
/* @var $model Trabajo */

$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	#array('label'=>'Create Trabajo', 'url'=>array('create')),
	array('label'=>'Ver', 'url'=>array('view', 'id'=>$model->Id)),
	#array('label'=>'Manage Trabajo', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Actualizar</font><!--<?php echo $model->Id; ?>--></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>