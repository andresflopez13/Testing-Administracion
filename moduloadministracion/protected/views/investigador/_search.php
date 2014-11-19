<?php
/* @var $this InvestigadorController */
/* @var $model Investigador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
        <div class="">
		<?php echo $form->label($model,'Nacionalidad'); ?>
                <?php echo $form->dropDownList($model,'Nacionalidad',array("colombiano"=>"colombiano","venezolano"=>"venezolano","peruano"=>"peruano","español"=>"español")); ?>
		
	</div>
    
        <div class="">
		<?php echo $form->label($model,'Tipo_Documento'); ?>
                <?php echo $form->dropDownList($model,'Tipo_Documento',array("cedula"=>"cedula","tarjeta_identidad"=>"Tarjeta identidad", "cedula_extrangeria"=>"cedula extrangeria", )); ?>
		
	</div>
    
        <div class="">
		<?php echo $form->label($model,'Numero_Documento'); ?>
                <?php echo $form->textField($model,'Numero_Documento'); ?>
	</div>
    
    
	<div class="">
		<?php echo $form->label($model,'Nombres'); ?>
		<?php echo $form->textArea($model,'Nombres',array('rows'=>1, 'cols'=>22)); ?>
	</div>

	<div class="">
		<?php echo $form->label($model,'Apellidos'); ?>
		<?php echo $form->textArea($model,'Apellidos',array('rows'=>1, 'cols'=>22)); ?>
	</div>

	

	
	

	

	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->