<?php
/* @var $this AfiliacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Afiliaciones',
);

$this->menu=array(
	array('label'=>'Crear Afiliación', 'url'=>array('create')),
	array('label'=>'Administrar Afiliación', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Afiliaciones</font></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
