<?php
/* @var $this ExamenesController */
/* @var $model Examenes */

$this->breadcrumbs=array(
	'Examenes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Examenes', 'url'=>array('index')),
	array('label'=>'Create Examenes', 'url'=>array('create')),
	array('label'=>'View Examenes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Examenes', 'url'=>array('admin')),
);
?>

<h1>Update Examenes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>