<?php
/* @var $this VencimientosController */
/* @var $model Vencimientos */

$this->breadcrumbs=array(
	'Vencimientoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vencimientos', 'url'=>array('index')),
	array('label'=>'Create Vencimientos', 'url'=>array('create')),
	array('label'=>'View Vencimientos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Vencimientos', 'url'=>array('admin')),
);
?>

<h1>Update Vencimientos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>