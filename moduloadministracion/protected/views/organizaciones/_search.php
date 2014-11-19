<?php
/* @var $this OrganizacionesController */
/* @var $model Organizaciones */
/* @var $form CActiveForm */
?>
    
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	
	<div class="">
		Ver : 
                <?php echo $form->dropDownList($model,'validar',array(""=>"Todos","1"=>"Validados"," "=>"Pendientes")); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->