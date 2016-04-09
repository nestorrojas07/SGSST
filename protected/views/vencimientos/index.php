<?php
/* @var $this VencimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vencimientoses',
);

$this->menu=array(
	array('label'=>'Create Vencimientos', 'url'=>array('create')),
	array('label'=>'Manage Vencimientos', 'url'=>array('admin')),
);
?>

<h1>Vencimientoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
