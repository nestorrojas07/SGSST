<?php
/* @var $this TrabajadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajadors',
);

$this->menu=array(
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Administrar Trabajadores', 'url'=>array('admin')),
);
?>

<h1>Trabajador</h1>

<!--<?php echo Chtml::image(Yii::app()->request->baseUrl.'/images/captura.png'); ?> -->


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=> array("htmlOptions"=>array("class"=>"pagination"))
)); ?>
