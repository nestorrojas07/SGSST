<?php
/* @var $this BrigadaController */
/* @var $model Brigada */

$this->breadcrumbs=array(
	'Brigadas'=>array('index'),
	$model->Funcion,
);

$this->menu=array(
	array('label'=>'Lista de Brigadas', 'url'=>array('index')),
	#array('label'=>'Create Brigada', 'url'=>array('create')),
	array('label'=>'Actulizar Brigada', 'url'=>array('update', 'id'=>$model->IdBrigada)),
	array('label'=>'Eliminar Brigada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IdBrigada),'confirm'=>'Are you sure you want to delete this item?')),
	#array('label'=>'Manage Brigada', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">Brigada: </font><font color="black"><?php echo $model->Funcion; ?></font></h1>

<!--
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IdBrigada',
		'Funcion',
		'Descripcion_funcion',
	),
)); ?>-->

<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Id</font></strong></td>
		<td><?php echo $model->IdBrigada ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Función</font></strong></td>
		<td><?php echo $model->Funcion ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Responsabilidades</font></strong></td>
		<td><?php echo $model->Descripcion_funcion ?></td>
	</tr>


</table>

<h2><font color="#336699">Lista de trabajadores en la brigada</font></h2>
<table class="table table-bordered table-striped">
	
	<tr>
		<td> <strong><font color="#336699">Cedula</font></strong></td>
		<td><strong><font color="#336699">Nombre</font></strong></td>
	</tr>
	<?php foreach ($model->trabajadors as $trabajador)	: ?>

		<tr>			
			<td> <?php  echo $trabajador->Cedula ?></td>
			<td><?php echo $trabajador->Nombre ?></td>
		</tr>

	<?php  endforeach; ?>
	
</table>	


