<?php
/* @var $this ExamenesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Examenes',
);

$this->menu=array(
	array('label'=>'Crear Examen', 'url'=>array('create')),
	array('label'=>'Administrar Examenes', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Examenes</font></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
