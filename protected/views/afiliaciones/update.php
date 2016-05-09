<?php
/* @var $this AfiliacionesController */
/* @var $model Afiliaciones */

$this->breadcrumbs=array(
	'Afiliaciones'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Afiliaciones', 'url'=>array('index')),
	array('label'=>'Ver Afiliación', 'url'=>array('view', 'id'=>$model->Id)),
);
?>

<h1><font color="#336699">Actualizar afiliacion: </font><font color="black"> <?php echo $model->Descripcion; ?></font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>