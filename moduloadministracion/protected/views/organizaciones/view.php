<?php
/* @var $this OrganizacionesController */
/* @var $model Organizaciones */

$this->breadcrumbs=array(
	'Organizaciones'=>array('index'),
	$model->Nit,
);

$this->menu=array(
    
	array('label'=>'Lista Organizaciones', 'url'=>array('index')),
    /*
	array('label'=>'Create Organizaciones', 'url'=>array('create')),
	array('label'=>'Update Organizaciones', 'url'=>array('update', 'id'=>$model->Nit)),
	array('label'=>'Delete Organizaciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Nit),'confirm'=>'Are you sure you want to delete this item?')),
	*/
         array('label'=>'Validar Organizaciones', 'url'=>array('admin')),
    
);
?>

<h1>Vista Organizacion nit <?php echo $model->Nit; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nit',
		'Email',
		'Direccion',
		'Telefono',
		'Nombre',
		'motivoCambioOrganizacion',
		'Ciudad',
		'validar',
	),
)); ?>
