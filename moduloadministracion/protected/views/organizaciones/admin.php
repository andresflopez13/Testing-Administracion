<?php
/* @var $this OrganizacionesController */
/* @var $model Organizaciones */

$this->breadcrumbs=array(
	'Organizaciones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Organizaciones', 'url'=>array('index')),
	//array('label'=>'Create Organizaciones', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "

$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});

$('.search-form form').submit(function(){
	$('#organizaciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Validar Organizaciones</h1>

<p>
Desde este sitio podemos validar una organizacion para que pueda iniciar sesion
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'organizaciones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Nit',
		'Email',
		'Direccion',
		'Telefono',
		'Nombre',
		'motivoCambioOrganizacion',
		'Ciudad',
		'validar',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
