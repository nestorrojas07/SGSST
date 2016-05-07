<?php  
$this->breadcrumbs=array(
	'Afiliaciones'=>array('afiliaciones/index'),
	'Afiliaciones realizadas'=>array('trabajadorAfiliaciones/index'),
	'Afiliar',
);

$this->menu=array(
);
?>


<h2><font color="#336699">Afiliar trabajador</font></h2> 

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

