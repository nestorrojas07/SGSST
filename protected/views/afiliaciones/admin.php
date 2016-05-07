<?php
/* @var $this AfiliacionesController */
/* @var $model Afiliaciones */

$this->breadcrumbs=array(
	'Afiliaciones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Crear Afiliación', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#afiliaciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><font color="#336699">Administrar Afiliaciones</font></h1>

<p>
Usted puede ingresar operadores de comparación como (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)  en busquedas que incluyan caracteres numericos al comienzo de cada una de sus busquedas, seguido del valor a buscar. (<b>Ejemplo:</b> <b>&lt;2</b>)
</p>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'afiliaciones-grid',
	'itemsCssClass'=>"table table-striped",
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Id',
		'Nombre',
		'Descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
