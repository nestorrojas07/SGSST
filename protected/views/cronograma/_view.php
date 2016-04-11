<?php
/* @var $this CronogramaController */
/* @var $data Cronograma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PersonasProgramadas')); ?>:</b>
	<?php echo CHtml::encode($data->PersonasProgramadas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PersonasAsistieron')); ?>:</b>
	<?php echo CHtml::encode($data->PersonasAsistieron); ?>
	<br />


</div>