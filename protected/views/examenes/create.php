<?php
/* @var $this ExamenesController */
/* @var $model Examenes */

$this->breadcrumbs=array(
	'Examenes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Examenes', 'url'=>array('index')),
);
?>

<h1><font color="#336699">Crear Examen</font></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>