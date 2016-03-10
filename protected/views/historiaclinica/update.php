<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'Historiaclinicas'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Historiaclinica', 'url'=>array('index')),
	array('label'=>'Create Historiaclinica', 'url'=>array('create')),
	array('label'=>'View Historiaclinica', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Historiaclinica', 'url'=>array('admin')),
);
?>

<h1>Update Historiaclinica <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>