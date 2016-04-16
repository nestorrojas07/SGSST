
<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'Historias clinicas'=>array('index'),
	$model->Id =>array('view','id'=>$model->Id),
	'Examen de ingreso vs examen de egreso',
);

$this->menu=array(
	array('label'=>'Lista de Historias clinicas', 'url'=>array('index')),
	#array('label'=>'Create Historiaclinica', 'url'=>array('create')),
	#array('label'=>'Actualizar Historia clinica', 'url'=>array('update', 'id'=>$model->Id)),
	#array('label'=>'Eliminar Historia clinica', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Seguro que desea eliminar esta historia clinica?')),
	#array('label'=>'Manage Historiaclinica', 'url'=>array('admin')),
	array('label'=>'Ver Historia clinica', 'url'=>array('view', 'id'=>$model->Id)),
	
);
?>

<h1><font color="#336699">Examen de ingreso vs examen de egreso de:</font><font color="black"> <?php echo $model->getNombreTrabajador($model->Cedula_trabajador); ?></font></h1><br>


<h2><font color="#336699">Examen de ingreso</font></h2>
<table class="table table-bordered table-striped">
	
	<tr>
		<td> <strong><font color="#336699">Tipo</font></strong></td>
		<td><strong><font color="#336699">Fecha</font></strong></td>
		<td><strong><font color="#336699">Descripción</font></strong></td>
		<td><strong><font color="#336699">Diagnostico</font></strong></td>
	</tr>
	<?php foreach ($model->examenes as $examen)	: ?>
		<?php  if($examen->Tipo==="Examen de ingreso"): ?>
			<tr>			
				<td> <?php  echo CHtml::link($examen->Tipo, array('examenes/view&id='.$examen->id)) ?></td>
				<td> <?php  echo $examen->Fecha ?></td>
				<td> <?php  echo $examen->Descripcion ?></td>
				<td> <?php  echo $examen->Diagnostico ?></td>
			</tr>
		<?php endif;   ?>

	<?php  endforeach; ?>
	
</table>	

<h2><font color="#336699">Examen de egreso</font></h2>
<table class="table table-bordered table-striped">
	
	<tr>
		<td> <strong><font color="#336699">Tipo</font></strong></td>
		<td><strong><font color="#336699">Fecha</font></strong></td>
		<td><strong><font color="#336699">Descripción</font></strong></td>
		<td><strong><font color="#336699">Diagnostico</font></strong></td>
	</tr>
	<?php foreach ($model->examenes as $examen)	: ?>
		<?php  if($examen->Tipo==="Examen de egreso"): ?>
			<tr>			
				<td> <?php  echo CHtml::link($examen->Tipo, array('examenes/view&id='.$examen->id)) ?></td>
				<td> <?php  echo $examen->Fecha ?></td>
				<td> <?php  echo $examen->Descripcion ?></td>
				<td> <?php  echo $examen->Diagnostico ?></td>
			</tr>
		<?php  endif; ?>

	<?php  endforeach; ?>
	
</table>	
	