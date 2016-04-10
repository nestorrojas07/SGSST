<?php
/* @var $this TrabajadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadores',
);

$this->menu=array(
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Administrar Trabajadores', 'url'=>array('admin')),
);
?>

<h1><strong><font color="#336699">Trabajadores</font></strong></h1><br>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
