<?php
/* @var $this PlanemergenciasController */
/* @var $model Planemergencias */

$this->breadcrumbs=array(
	'Planemergenciases'=>array('index'),
	$model->IdPlan=>array('view','id'=>$model->IdPlan),
	'Update',
);

$this->menu=array(
	array('label'=>'List Planemergencias', 'url'=>array('index')),
	array('label'=>'Create Planemergencias', 'url'=>array('create')),
	array('label'=>'View Planemergencias', 'url'=>array('view', 'id'=>$model->IdPlan)),
	array('label'=>'Manage Planemergencias', 'url'=>array('admin')),
);
?>

<h1>Update Planemergencias <?php echo $model->IdPlan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>