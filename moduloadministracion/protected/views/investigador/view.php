<?php
/* @var $this InvestigadorController */
/* @var $model Investigador */

$this->breadcrumbs=array(
	'Investigadors'=>array('index'),
	$model->Numero_Documento,
);

$this->menu=array(
	array('label'=>'Lista Investigadores', 'url'=>array('index')),
//	array('label'=>'Create Investigador', 'url'=>array('create')),
//	array('label'=>'Update Investigador', 'url'=>array('update', 'id'=>$model->Numero_Documento)),
//	array('label'=>'Delete Investigador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Numero_Documento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Registrar como Evaluador', 'url'=>array('admin')),
);
?>

<h1>Ver Investigador <?php echo $model->Nombres; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nombres',
		'Apellidos',
		'Tipo_Documento',
		'Numero_Documento',
		'Nacionalidad',
        'Hoja_vida',
		'Datos_contacto',
		'Evaluador',
       	'justificacion',              
	),
)); ?>
