<?php
/* @var $this VencimientosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Insumos',
);

$this->menu=array(
	array('label'=>'Crear insumo', 'url'=>array('create')),
	array('label'=>'Administrar insumos', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Insumos</font></h1>

<?php if($this->vencidos): ?>
	<?php Yii::app()->user->setFlash("warning","El ".round($this->metricaGeneral,2)."% de los insumos se encuentran vencidos") ?>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
