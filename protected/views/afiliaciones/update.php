<?php
/* @var $this AfiliacionesController */
/* @var $model Afiliaciones */

$this->breadcrumbs=array(
	'Afiliaciones'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Afiliaciones', 'url'=>array('index')),
	array('label'=>'Create Afiliaciones', 'url'=>array('create')),
	array('label'=>'View Afiliaciones', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Afiliaciones', 'url'=>array('admin')),
);
?>

<h1>Update Afiliaciones <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>