<?php
/* @var $this BrigadaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Brigadas',
);

$this->menu=array(
	array('label'=>'Crear Brigada', 'url'=>array('create')),
	array('label'=>'Administrar Brigadas', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Brigadas</font></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
