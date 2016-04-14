<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadores'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'Lista de Trabajadores', 'url'=>array('index')),
	#array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Actualizar Trabajador', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Eliminar Trabajador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Seguro qeu desea eliminar este trabajador?')),
	#array('label'=>'Manage Trabajador', 'url'=>array('admin')),

);
?>

<h1><font color="#336699">Trabajador: </font><font color="black"> <?php echo $model->Cedula; ?></font></h1>
<!--
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'Cedula',
		'Nombre',
		'Telefono',
		'Foto_Link',
		'Correo',
		'Titulo_academico',
		'experiencia',
		'ausencias',
		'IdBrigada',
		'IdTrabajo',
	),
)); ?>-->


<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Cedula</font></strong></td>
		<td><?php echo $model->Cedula ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Nombre</font></strong></td>
		<td><?php echo $model->Nombre ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Telefono</font></strong></td>
		<td><?php echo $model->Telefono ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Correo</font></strong></td>
		<td><?php echo $model->Correo ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Titulo academico</font></strong></td>
		<td><?php echo $model->Titulo_academico ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Experiencia</font></strong></td>
		<td><?php echo $model->experiencia ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Ausencias</font></strong></td>
		<td><?php echo $model->ausencias ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Brigada</font></strong></td>
		<td><?php echo $model->getFuncionBrigada($model->IdBrigada) ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Tarea</font></strong></td>
		<td><?php echo $model->getTareaTrabajo($model->IdTrabajo) ?></td>
	</tr>	

</table>

<h2><font color="#336699">Lista de afiliaciones</font></h2>
<table class="table table-bordered table-striped">
	
	<tr>
		<!--<td><strong><font color="#336699">Id</font></strong></td>-->
		<td> <strong><font color="#336699">Nombre</font></strong></td>
		<td><strong><font color="#336699">Descripción</font></strong></td>
	</tr>
	<?php foreach ($model->afiliaciones as $afiliacion)	: ?>

		<tr>			
			<!--<td> <?php  echo $afiliacion->Id ?></td>-->
			<td> <?php  echo CHtml::link($afiliacion->Nombre, array('afiliaciones/view&id='.$afiliacion->Id)) ?></td>
			<td><?php echo $afiliacion->Descripcion ?></td>
		</tr>

	<?php  endforeach; ?>
	
</table>	

<h2><font color="#336699">Lista de historias clínicas</font></h2>
<table class="table table-bordered table-striped">
	
	<tr>
		<!--<td> <strong><font color="#336699">Id</font></strong></td>-->
		<td><strong><font color="#336699">Descripción</font></strong></td>
	</tr>
	<?php foreach ($model->historiaclinicas as $historiaClinica)	: ?>

		<tr>		
			<!--<td><?php  echo  $historiaClinica->Id ?></td>-->
			<td><?php echo CHtml::link($historiaClinica->Descripcion, array('historiaclinica/view&id='.$historiaClinica->Id))?></td>
		</tr>

	<?php  endforeach; ?>
	
</table>	

<h2><font color="#336699">Es responsable de los siguientes insumos</font></h2>
<table class="table table-bordered table-striped">
	
	<tr>
		<td> <strong><font color="#336699">Nombre</font></strong></td>
		<td><strong><font color="#336699">Fecha de vencimiento</font></strong></td>
	</tr>
	<?php foreach ($model->vencimientoses as $insumo)	: ?>

		<tr>		
			<td> <?php  echo CHtml::link($insumo->Nombre, array('vencimientos/view&id='.$insumo->id)) ?></td>
			<td><?php echo $insumo->fecha_Vencimiento ?></td>
		</tr>

	<?php  endforeach; ?>
	
</table>	

