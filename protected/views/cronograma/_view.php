<?php
/* @var $this CronogramaController */
/* @var $data Cronograma */
?>




<div class="view">

	<div class="media body">
		<h4 class="media heading">
			
		

			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</font></strong></b>
			<small><?php echo CHtml::link(CHtml::encode($data->Descripcion), array('view', 'id'=>$data->id)); ?></small>
		

			
			<br>
			<b><strong><font color="#336699"><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</font></strong></b>
			<font color="black"><?php echo CHtml::encode($data->Fecha); ?></font>	

			
			<br>
			<?php if($data->estado==1): ?>

				<b><strong><font color="#336699"><?php echo "Asistencia"; ?>:</font></strong></b>
				</small><font color="black"><?php echo round($data->metrica,2)." %"; ?></font>
			<?php endif; ?>
	
			<br>
			<a href="<?php echo $this->createUrl("enabled",array("id"=>$data->id));?>"> 
				<span class="btn btn-small btn-<?php echo $data->estado==0?"warning":"success";?>"><?php echo $data->estado==0?"Pendiente":"Realizado" ?></span>
			</a>


			<br><br>
			
		</h4>
	</div>


</div>