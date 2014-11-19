<?php
/* @var $this ParametrosController */
/* @var $model Parametros */
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
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textArea($model,'Nombre',array('rows'=>1, 'cols'=>23)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'Valor'); ?>
		<?php echo $form->textArea($model,'Valor',array('rows'=>1, 'cols'=>23)); ?>
	</div>

	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->