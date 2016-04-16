<?php
/* @var $this CronogramaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cronogramas',
);

$this->menu=array(
	array('label'=>'Crear Cronograma', 'url'=>array('create')),
	array('label'=>'Administrar Cronogramas', 'url'=>array('admin')),
);
?>



<?php Yii::app()->user->setFlash("info","Cronogramas pendientes: ".round($this->metricaGeneral,2)." %") ?>
<?php if($this->vencidos): ?>
	<?php Yii::app()->user->setFlash("warning","Existen cronogramas vencidos o que estan por vencer") ?>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


