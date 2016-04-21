<?php
/* @var $this HistoriaclinicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historias clinicas',
);

$this->menu=array(
	array('label'=>'Crear Historia clinica', 'url'=>array('create')),
	array('label'=>'Administrar Historias clinicas', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Historias clinicas</font></h1>

<?php 
		
		if($this->getExamenRealizacionGeneral() == true)
		{
			Yii::app()->user->setFlash("warning","Se debe realizar un examen de ingreso o periodico en algunas historias clinicas");
		} 
	?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
