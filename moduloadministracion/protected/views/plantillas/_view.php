<?php
/* @var $this PlantillasController */
/* @var $data Plantillas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />
        
        <?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('enlaces')); ?>:</b>
	<?php echo CHtml::encode($data->enlaces); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imagenes')); ?>:</b>
	<?php echo CHtml::encode($data->imagenes); ?>
	<br />
        */ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('notificacion')); ?>:</b>
	<?php echo CHtml::encode($data->notificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alerta')); ?>:</b>
	<?php echo CHtml::encode($data->alerta); ?>
	<br />

	*/ ?>

</div>