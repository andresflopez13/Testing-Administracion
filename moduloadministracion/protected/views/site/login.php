<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Iniciar Sesion',
);
?>

<h1 style="text-align: center;">Iniciar Sesion</h1>

<p>Por favor complete el siguiente formulario con sus datos de acceso:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<div class="row"  style="text-align: center;" >
		<?php echo $form->labelEx($model,'Nombre de Usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row"  style="text-align: center;">
		<?php echo $form->labelEx($model,'Contrasena'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Solo se puede acceder con cuenta de administrador
		</p>
	</div>

	<div class="row rememberMe"  style="text-align: center;">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'Recuerdame'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons"  style="text-align: center;">
		<?php echo CHtml::submitButton('Iniciar Sesion',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
