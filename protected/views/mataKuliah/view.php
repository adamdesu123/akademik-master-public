<?php
/* @var $this MataKuliahController */
/* @var $model MataKuliah */

$this->breadcrumbs=array(
	'Mata Kuliahs'=>array('index'),
	$model->No_Mk,
);
?>

<h1>Mata Kuliah: <?php echo $model->Nama_Mk; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'No_Mk',
		'Nama_Mk',
		'Sks',
	),
)); ?>
