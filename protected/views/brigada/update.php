<?php
/* @var $this BrigadaController */
/* @var $model Brigada */

$this->breadcrumbs=array(
	'Brigadas'=>array('index'),
	$model->IdBrigada=>array('view','id'=>$model->IdBrigada),
	'Update',
);

$this->menu=array(
	array('label'=>'List Brigada', 'url'=>array('index')),
	array('label'=>'Create Brigada', 'url'=>array('create')),
	array('label'=>'View Brigada', 'url'=>array('view', 'id'=>$model->IdBrigada)),
	array('label'=>'Manage Brigada', 'url'=>array('admin')),
);
?>

<h1>Update Brigada <?php echo $model->IdBrigada; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>