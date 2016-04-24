
<?php


	$this->breadcrumbs=array(
	'MIPECR'=>array('index'),
	$model->Id =>array('view','id'=>$model->Id),
	'Evaluacion del riesgo',
	);

	$this->menu=array(
	array('label'=>'MIPECR', 'url'=>array('index')),
	array('label'=>'Actualizar', 'url'=>array('update', 'id'=>$model->Id)),
	#array('label'=>'Create Trabajo', 'url'=>array('create')),
	array('label'=>'Principal', 'url'=>array('view', 'id'=>$model->Id)),
	#array('label'=>'Manage Trabajo', 'url'=>array('admin')),
	);
?>

<h1><font color="#336699">Evaluacion del riesgo: </font></h1>

<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Nivel de deficiencia</font></strong></td>
		<td><?php echo $model->evaluacion_riesgo_nivel_deficiencia ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Nivel de exposicion</font></strong></td>
		<td><?php echo $model->evaluacion_riesgo_nivel_exposicion ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Nivel de probabilidad</font></strong></td>
		<td><?php echo $model->evaluacion_riesgo_nivel_probabilidad ?></td>
	</tr>
	<tr>
		<td ><strong><font color="#336699">Interpretacion del nivel de probabilidad</font></strong></td>
		<td >
		<?php if($model->evaluacion_riesgo_interpretacion_nivel_probabilidad=="Bajo") :?>
					<span class="label label-success" style="font-size: 13px">Bajo</span>
				<?php endif; ?>
				<?php if($model->evaluacion_riesgo_interpretacion_nivel_probabilidad=="Medio") :?>
					<span class="label label-medio" style="font-size: 13px">Medio</span>
				<?php endif; ?>
				<?php if($model->evaluacion_riesgo_interpretacion_nivel_probabilidad=="Alto") :?>
					<span class="label label-warning" style="font-size: 13px">Alto</span>
				<?php endif; ?>
				<?php if($model->evaluacion_riesgo_interpretacion_nivel_probabilidad=="Muy alto") :?>
					<span class="label label-muyalto" style="font-size: 13px">Muy alto</span>
				<?php endif; ?></td>

	</tr>
	<tr>
		<td><strong><font color="#336699">Nivel de consecuencia</font></strong></td>
		<td><?php echo $model->evaluacion_riesgo_nivel_consecuencia ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Nivel del riesgo e intervencion</font></strong></td>
		<td><?php echo $model->evaluacion_riesgo_nivel_riesgo_intervencion ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Interpretacion del nivel del riesgo</font></strong></td>
		<td><?php echo $model->evaluacion_riesgo_interpretacion_nivel_riesgo ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Valoracion del riesgo</font></strong></td>
		<td><?php echo $model->valoracion_riesgo ?></td>
	</tr>
</table>