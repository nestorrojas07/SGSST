<?php  
$this->breadcrumbs=array(
	'Afiliaciones'=>array('afiliaciones/index'),
	'Afiliaciones realizadas'=>array('trabajadorAfiliaciones/index'),
	'Afiliar',
);

$this->menu=array(
	#array('label'=>'Lista de Examenes', 'url'=>array('index')),
	#array('label'=>'Manage Examenes', 'url'=>array('admin')),
);
?>


<h2><font color="#336699">Afiliar trabajador</font></h2> 

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

