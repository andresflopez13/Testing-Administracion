<?php
/* @var $this OrganizacionesController */
/* @var $data Organizaciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nit')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nit), array('view', 'id'=>$data->Nit)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Telefono')); ?>:</b>
	<?php echo CHtml::encode($data->Telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('motivoCambioOrganizacion')); ?>:</b>
	<?php echo CHtml::encode($data->motivoCambioOrganizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('validar')); ?>:</b>
	<?php echo CHtml::encode($data->validar); ?>
	<br />

	*/ ?>

</div>