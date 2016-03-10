<?php
/* @var $this AfiliacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Afiliaciones',
);

$this->menu=array(
	array('label'=>'Create Afiliaciones', 'url'=>array('create')),
	array('label'=>'Manage Afiliaciones', 'url'=>array('admin')),
);
?>

<h1>Afiliaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
