
<?php


	$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	$model->Id =>array('view','id'=>$model->Id),
	'Peligro',
	);

	$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Principal', 'url'=>array('view', 'id'=>$model->Id)),
	);
?>

<h1><font color="#336699">Peligro: </font></h1>


<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Descripcion</font></strong></td>
		<td><?php echo $model->peligro_descripcion ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Clasificacion</font></strong></td>
		<td><?php echo $model->peligro_clasificacion ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Efectos posibles</font></strong></td>
		<td><?php echo $model->peligro__efectosPosibles ?></td>
	</tr>

</table>
