
<?php


	$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	$model->Id =>array('view','id'=>$model->Id),
	'Controles existentes',
	);

	$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->Id)),
	#array('label'=>'Create Trabajo', 'url'=>array('create')),
	array('label'=>'Principal', 'url'=>array('view', 'id'=>$model->Id)),
	#array('label'=>'Manage Trabajo', 'url'=>array('admin')),
	);
?>

<h1><font color="#336699">Controles existentes: </font></h1>

<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Fuente</font></strong></td>
		<td><?php echo $model->control_existente_fuente ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Medio</font></strong></td>
		<td><?php echo $model->control_existente_medio ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Persona</font></strong></td>
		<td><?php echo $model->control_existente_persona ?></td>
	</tr>
	
</table>