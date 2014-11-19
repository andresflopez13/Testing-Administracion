<?php
/* @var $this InvestigadorController */
/* @var $model Investigador */

$this->breadcrumbs=array(
	'Investigadores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Investigadores', 'url'=>array('index')),
	//array('label'=>'Registrar como Evaluador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#investigador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Registrar Investigador como Evaluador</h1>

<p>
Permite agregar la carateristica de evaluador a un investigador
</p>

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'investigador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Nombres',
		'Apellidos',
		'Tipo_Documento',
		'Numero_Documento',
		'Nacionalidad',
		'Datos_contacto',
//		'Hoja_vida',
		'Evaluador',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
