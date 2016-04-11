<?php
/* @var $this ExamenesController */
/* @var $model Examenes */

$this->breadcrumbs=array(
	'Examenes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Examenes', 'url'=>array('index')),
	#array('label'=>'Create Examenes', 'url'=>array('create')),
	array('label'=>'Actualizar Examen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Examen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro que desea eliminar este examen?')),
	#array('label'=>'Manage Examenes', 'url'=>array('admin')),
);
?>

<h1><font color="#336699"><?php echo $model->Tipo; ?></font> </h1>

<!--

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Tipo',
		'Fecha',
		'Descripcion',
		'Diagnostico',
		'IdHistoriaClinica',
	),
)); ?> -->

<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Tipo</font></strong></td>
		<td><?php echo $model->Tipo ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Fecha</font></strong></td>
		<td><?php echo $model->Fecha ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Descripción</font></strong></td>
		<td><?php echo $model->Descripcion ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Diagnóstico</font></strong></td>
		<td><?php echo $model->Diagnostico ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Historia clinica</font></strong></td>
		<td><?php echo $model->getNombreHistoriaClinica($model->IdHistoriaClinica) ?></td>
	</tr>


</table>


