<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'texto'); ?>
		<?php echo $form->textField($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'enlaces'); ?>
		<?php echo $form->textField($model,'enlaces',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'imagenes'); ?>
		<?php echo $form->textField($model,'imagenes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'notificacion'); ?>
		<?php echo $form->textField($model,'notificacion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'alerta'); ?>
		<?php echo $form->textField($model,'alerta',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->