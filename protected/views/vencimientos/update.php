<?php
/* @var $this VencimientosController */
/* @var $model Vencimientos */

$this->breadcrumbs=array(
	'Insumos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de insumos', 'url'=>array('index')),
	#array('label'=>'Crear insumo', 'url'=>array('create')),
	array('label'=>'Ver insumo', 'url'=>array('view', 'id'=>$model->id)),
	#array('label'=>'Administrar insumos', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Actualizar insumo: </font><font color="black"> <?php echo $model->Nombre; ?></font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>