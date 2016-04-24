
<?php


	$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	$model->Id =>array('view','id'=>$model->Id),
	'Criterios para establecer controles',
	);

	$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->Id)),
	#array('label'=>'Create Trabajo', 'url'=>array('create')),
	array('label'=>'Principal', 'url'=>array('view', 'id'=>$model->Id)),
	#array('label'=>'Manage Trabajo', 'url'=>array('admin')),
	);
?>

<h1><font color="#336699">Criterios para establecer controles: </font></h1>

<table class="table table-bordered table-striped">
	<!--<tr>
		<td><strong><font color="#336699">Numero de expuestos</font></strong></td>
		<td><?php echo $model->criterio_numero_expuestos ?></td>		
	</tr>-->
	<tr>
		<td><strong><font color="#336699">Peor consecuencia</font></strong></td>
		<td><?php echo $model->criterio_peor_consecuencia ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Existencia de requisito legal</font></strong></td>
		<td><?php echo $model->cambiarRequisitoLegal ?></td>
	</tr>
	
</table>