<?php
/* @var $this ExamenesController */
/* @var $model Examenes */

$this->breadcrumbs=array(
	'Examenes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Actualizar Examen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Examen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro que desea eliminar este examen?')),
);
?>

<h1><font color="#336699"><?php echo $model->Tipo; ?></font> </h1>


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
		<td><strong><font color="#336699">Descripcion</font></strong></td>
		<td><?php echo $model->Descripcion ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Diagnostico</font></strong></td>
		<td><?php echo $model->Diagnostico ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Historia clinica</font></strong></td>
		<td><?php echo CHtml::link($model->getNombreHistoriaClinica($model->IdHistoriaClinica) ,array('historiaclinica/view&id='.$model->IdHistoriaClinica))?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Trabajador</font></strong></td>
		<td><?php  echo CHtml::link($model->getNombreTrabajador($model->getCedulaTrabajador($model->IdHistoriaClinica)) , array('trabajador/view&id='.$model->getCedulaTrabajador($model->IdHistoriaClinica))) ?></td>
	</tr>


</table>


