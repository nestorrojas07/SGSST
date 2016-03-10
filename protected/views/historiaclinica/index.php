<?php
/* @var $this HistoriaclinicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historiaclinicas',
);

$this->menu=array(
	array('label'=>'Create Historiaclinica', 'url'=>array('create')),
	array('label'=>'Manage Historiaclinica', 'url'=>array('admin')),
);
?>

<h1>Historiaclinicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
