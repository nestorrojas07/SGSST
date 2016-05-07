<?php
/* @var $this TrabajoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'MIPECR',
);

$this->menu=array(
	array('label'=>'Crear', 'url'=>array('create')),
	array('label'=>'Administrar MIPECR', 'url'=>array('admin')),
);
?>

<h1><font color="#336699">MIPECR</font></h1>
<br>

<table class="table table-bordered table-striped">

		<tr>
			<td> <strong><font color="#336699">Proceso</font></strong></td>
			<td><strong><font color="#336699">Zona</font></strong></td>
			<td><strong><font color="#336699">Actividad</font></strong></td>
			<td><strong><font color="#336699">Tarea</font></strong></td>
			<td><strong><font color="#336699">Rutinaria</font></strong></td>
		</tr>
		<?php $mipecrs=$this->listaMipecr; ?>
		<?php foreach ($mipecrs as $mipecr)	: ?>

			<tr>			
				<td> <?php  echo CHtml::link($mipecr->proceso, array('trabajo/view&id='.$mipecr->Id)) ?></td>
				<td> <?php  echo $mipecr->zona ?></td>
				<td> <?php  echo $mipecr->actividad ?></td>
				<td> <?php  echo $mipecr->tarea ?></td>
				<td> <?php  echo $mipecr->cambiarRutinaria ?></td>
			</tr>

		<?php  endforeach; ?>
		
</table>	

