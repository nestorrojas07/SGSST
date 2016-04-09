<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->Descripcion,
);

$this->menu=array(
	array('label'=>'Lista de Cronogramas', 'url'=>array('index')),
	array('label'=>'Crear Cronograma', 'url'=>array('create')),
	array('label'=>'Actualizar Cronograma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cronograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro que desea eliminar este cronograma?')),
	array('label'=>'Administrar Cronogramas', 'url'=>array('admin')),
);
?>

<h2>Cronograma: <font color="black"><?php echo $model->Descripcion; ?></font></h2>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'id',
		'Descripcion',
		'Fecha',
		'estado',
	),
)); ?>
