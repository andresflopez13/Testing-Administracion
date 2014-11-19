<?php
/* @var $this PlantillasController */
/* @var $model Plantillas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'plantillas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $model->titulo; ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $model->descripcion; ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>3, 'cols'=>30)); ?>
		<?php echo $form->error($model,'texto'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'enlaces'); ?>
		<?php echo $form->textArea($model,'enlaces',array('rows'=>2, 'cols'=>30)); ?>
		<?php echo $form->error($model,'enlaces'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'imagenes'); ?>
		<?php echo $form->textArea($model,'imagenes',array('rows'=>2, 'cols'=>30)); ?>
		<?php echo $form->error($model,'imagenes'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php $this->widget("zii.widgets.jui.CJuiDatePicker",array(
                    "attribute"=>"fecha",
                    "model"=>$model,
                    "language"=>"es",
                    "options"=>array(
                        "dateFormat"=>"yymmdd"
                    )
                )); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'notificacion'); ?>
		<?php echo $form->checkBox($model,'notificacion'); ?>
		<?php echo $form->error($model,'notificacion'); ?>
	</div>

	<div class="">
		<?php echo $form->labelEx($model,'alerta'); ?>
		<?php echo $form->checkBox($model,'alerta'); ?>
		<?php echo $form->error($model,'alerta'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->