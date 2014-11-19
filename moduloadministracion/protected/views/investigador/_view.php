<?php
/* @var $this InvestigadorController */
/* @var $data Investigador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Documento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Numero_Documento), array('view', 'id'=>$data->Numero_Documento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombres')); ?>:</b>
	<?php echo CHtml::encode($data->Nombres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Apellidos')); ?>:</b>
	<?php echo CHtml::encode($data->Apellidos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Documento')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Documento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->Nacionalidad); ?>
	<br />

	<?php echo CHtml::encode($data->Datos_contacto); ?>
	<br /><b><?php echo CHtml::encode($data->getAttributeLabel('Datos_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->Datos_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Evaluador')); ?>:</b>
	<?php echo CHtml::encode($data->Evaluador); ?>
	<br />
        
        <?php echo CHtml::encode($data->justificacion); ?>
	<br /><b><?php echo CHtml::encode($data->getAttributeLabel('justificacion')); ?>:</b>
	<?php echo CHtml::encode($data->justificacion); ?>
        <br />
        <?php echo CHtml::encode($data->Hoja_vida); ?>
	<br /><b><?php echo CHtml::encode($data->getAttributeLabel('Hoja_vida')); ?>:</b>
	<?php echo CHtml::encode($data->Hoja_vida); ?>
        <br />


</div>