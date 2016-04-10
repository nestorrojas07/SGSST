<?php
/* @var $this PlanemergenciasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Planemergenciases',
);

$this->menu=array(
	array('label'=>'Create Planemergencias', 'url'=>array('create')),
	array('label'=>'Manage Planemergencias', 'url'=>array('admin')),
);
?>

<h1>Planemergenciases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
