
<?php
/* @var $this TrabajadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadors',
);

$this->menu=array(
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Modificar Trabajador', 'url'=>array('admin')),
);
?>

<h1>Trabajadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
