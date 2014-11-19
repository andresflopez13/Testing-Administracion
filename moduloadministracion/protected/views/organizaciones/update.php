<?php
/* @var $this OrganizacionesController */
/* @var $model Organizaciones */

$this->breadcrumbs=array(
	'Organizaciones'=>array('index'),
	$model->Nit=>array('view','id'=>$model->Nit),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Organizaciones', 'url'=>array('index')),
	//array('label'=>'Create Organizaciones', 'url'=>array('create')),
	//array('label'=>'View Organizaciones', 'url'=>array('view', 'id'=>$model->Nit)),
	array('label'=>'Validar Organizaciones', 'url'=>array('admin')),
);
?>
<form action="procesar.php" method="GET">
    
</form>
<h1>Validar Organizacion  <?php echo $model->Nombre; ?></h1>

<h3>Recuerde que al validar o no la organizacion se enviara un mensaje de notificacion a esta </h3> 

<?php $this->renderPartial('_form', array('model'=>$model)); ?>