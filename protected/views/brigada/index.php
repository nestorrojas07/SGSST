<?php
/* @var $this BrigadaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Brigadas',
);

$this->menu=array(
	array('label'=>'Create Brigada', 'url'=>array('create')),
	array('label'=>'Manage Brigada', 'url'=>array('admin')),
);
?>

<h1>Brigadas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
