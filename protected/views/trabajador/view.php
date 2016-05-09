<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajadores'=>array('index'),
	$model->Cedula,
);

$this->menu=array(
	array('label'=>'Lista de Trabajadores', 'url'=>array('index')),
	array('label'=>'Actualizar Trabajador', 'url'=>array('update', 'id'=>$model->Cedula)),
	array('label'=>'Eliminar Trabajador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Cedula),'confirm'=>'Seguro que desea eliminar este trabajador?')),

);
?>



<h1><font color="#336699">Trabajador: </font><font color="black"> <?php echo $model->Cedula; ?></font></h1>

<?php 
	$this->tieneExamenes($model->Cedula);
 ?>

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
		<td><?php echo CHtml::link($model->getFuncionBrigada($model->IdBrigada),array('brigada/view&id='.$model->IdBrigada)) ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Tarea</font></strong></td>
		<td><?php echo CHtml::link($model->getTareaTrabajo($model->IdTrabajo),array('trabajo/view&id='.$model->IdTrabajo)) ?></td>
	</tr>	

</table>

<h2><font color="#336699">Lista de afiliaciones</font></h2>
<table class="table table-bordered table-striped">
	
	<tr>
		<td> <strong><font color="#336699">Nombre</font></strong></td>
		<td><strong><font color="#336699">Descripción</font></strong></td>
	</tr>
	<?php foreach ($model->afiliaciones as $afiliacion)	: ?>

		<tr>			
			<td> <?php  echo CHtml::link($afiliacion->Nombre, array('afiliaciones/view&id='.$afiliacion->Id)) ?></td>
			<td><?php echo $afiliacion->Descripcion ?></td>
		</tr>

	<?php  endforeach; ?>
	
</table>	

<h2><font color="#336699">Lista de historias clinicas</font></h2>

<?php echo CHtml::submitButton('Crear historia clinica', array('submit'=>array('historiaclinica/create'),"class"=>"btn btn-inverse btn-medium")); ?>
<br> 
<br>

<table class="table table-bordered table-striped">
	
	<tr>
		<td><strong><font color="#336699">Descripcion</font></strong></td>
	</tr>
	<?php foreach ($model->historiaclinicas as $historiaClinica)	: ?>

		<tr>		
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

