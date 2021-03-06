<?php
/* @var $this CronogramaController */
/* @var $model Cronograma */

$this->breadcrumbs=array(
	'Cronogramas'=>array('index'),
	$model->Descripcion,
);

$this->menu=array(
	array('label'=>'Lista de Cronogramas', 'url'=>array('index')),
	array('label'=>'Actualizar Cronograma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cronograma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Seguro que desea eliminar este cronograma?')),
);
?>

<h1><font color="#336699">Cronograma: </font> <font color="black"><?php echo $model->Descripcion; ?></font></h1>

<br>

<?php 
$date1=date('Y-m-d');
$date2=$model->Fecha;

if(strtotime($date1)>=strtotime($date2)&&$model->estado==0)
{
	Yii::app()->user->setFlash("warning","Debe realizarse este cronograma");
}
 ?> 

 <?php echo CHtml::submitButton('Registrar personas que asistieron', array('submit'=>array('cronograma/update2&id='.$model->id),"class"=>"btn btn-inverse btn-medium")); ?>

 <br>
 <br>

<table class="table table-bordered table-striped">
	<tr>
		<td><strong><font color="#336699">Id</font></strong></td>
		<td><?php echo $model->id ?></td>		
	</tr>
	<tr>
		<td><strong><font color="#336699">Descripcion</font></strong></td>
		<td><?php echo $model->Descripcion ?></td>
		
	</tr>
	<tr>
		<td><strong><font color="#336699">Fecha de realización</font></strong></td>
		<td><?php echo $model->Fecha ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Numero de personas citadas</font></strong></td>
		<td><?php echo $model->PersonasProgramadas ?></td>
	</tr>
	<tr>
		<td><strong><font color="#336699">Numero de personas que asistieron</font></strong></td>
		<td><?php echo $model->PersonasAsistieron ?></td>
	</tr>

</table>
