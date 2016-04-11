<?php
/* @var $this AfiliacionesController */
/* @var $model Afiliaciones */

$this->breadcrumbs=array(
	'Afiliaciones'=>array('index'),
	$model->Nombre,
);

$this->menu=array(
	array('label'=>'Lista de Afiliaciones', 'url'=>array('index')),
	#array('label'=>'Crear Afiliación', 'url'=>array('create')),
	array('label'=>'Actualizar Afiliación', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Eliminar Afiliación', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Seguro que desea eliminar esta efiliación?')),
	#array('label'=>'Manage Afiliaciones', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Afiliación: </font><font color="black"><?php echo $model->Descripcion; ?></font></h1>

<!--

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Id',
		'Nombre',
		'Descripcion',
		'Fecha',
	),
)); ?>-->


<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Id</font></strong></td>
		<td><?php echo $model->Id ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Nombre</font></strong></td>
		<td><?php echo $model->Nombre ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Descripción</font></strong></td>
		<td><?php echo $model->Descripcion ?></td>
	</tr>
</table>

<h2><font color="#336699">Lista de trabajadores afiliados</font></h2>
<table class="table table-bordered table-striped">
	
	<tr>
		<td> <strong><font color="#336699">Cedula</font></strong></td>
		<td><strong><font color="#336699">Nombre</font></strong></td>
	</tr>
	<?php foreach ($model->trabajadors as $trabajador)	: ?>

		<tr>			
			<td> <?php  echo $trabajador->Cedula?></td>
			<td><?php echo $trabajador->Nombre ?></td>
		</tr>

	<?php  endforeach; ?>
	
</table>	
