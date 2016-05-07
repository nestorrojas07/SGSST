<?php
/* @var $this BrigadaController */
/* @var $model Brigada */

$this->breadcrumbs=array(
	'Brigadas'=>array('index'),
	$model->IdBrigada=>array('view','id'=>$model->IdBrigada),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Brigadas', 'url'=>array('index')),
	array('label'=>'Ver Brigada', 'url'=>array('view', 'id'=>$model->IdBrigada)),
);
?>

<h1><font color="#336699">Actualizar brigada: </font> <font color="black"><?php echo $model->Funcion; ?></font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>