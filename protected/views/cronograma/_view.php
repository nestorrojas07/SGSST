<?php
/* @var $this CronogramaController */
/* @var $data Cronograma */
?>

<div class="view">

	<div class="media body">
		<h4 class="media heading">
			
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Descripción')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->Descripcion), array('view', 'id'=>$data->id)); ?></small>
		

			<a href="<?php echo $this->createUrl("enabled",array("id"=>$data->id));?>"> 
				<span class="label label-<?php echo $data->estado==0?"success":"warning";?>"><?php echo $data->estado==0?"Pendiente":"Realizado" ?></span>
			</a>
			<br>
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</font></strong></b>
			<font color="black"><?php echo CHtml::encode($data->Fecha); ?></font>		
			
			
		</h4>
	</div>

	<!--
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
	-->


</div>