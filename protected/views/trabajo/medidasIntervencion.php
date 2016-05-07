
<?php


	$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	$model->Id =>array('view','id'=>$model->Id),
	'Medidas de intervencion',
	);

	$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Principal', 'url'=>array('view', 'id'=>$model->Id)),
	);
?>

<h1><font color="#336699">Medidas de intervencion: </font></h1>

<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Eliminacion</font></strong></td>
		<td><?php echo $model->intervencion_eliminacion ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Sustitucion</font></strong></td>
		<td><?php echo $model->intervencion_sustituacion ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Controles de ingenieria</font></strong></td>
		<td><?php echo $model->intervencion_control_ingenieria ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Controles administrativos, señalizacion y advertencia</font></strong></td>
		<td><?php echo $model->intervencion_control_administrativo ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Equipos y elementos de proteccion</font></strong></td>
		<td><?php echo $model->intervencion_elementos_proteccion_personal ?></td>
	</tr>
	
</table>