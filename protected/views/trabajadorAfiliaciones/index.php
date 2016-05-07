<?php
/* @var $this AfiliacionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Afiliaciones'=>array('afiliaciones/index'),
	'Afiliaciones realizadas',
);

$this->menu=array(
	
	
);
?>

<h1><font color="#336699">Afiliaciones realizadas</font></h1>

<?php echo CHtml::submitButton('Afiliar trabajador', array('submit'=>array('trabajadorAfiliaciones/create'),"class"=>"btn btn-inverse btn-medium")); ?>

 <br><br>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


