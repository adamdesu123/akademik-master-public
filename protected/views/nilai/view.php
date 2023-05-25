<?php
/* @var $this NilaiController */
/* @var $model Nilai */

$this->breadcrumbs=array(
	'Nilais'=>array('index'),
	$model->Nim,
);
?>

<h1>Nilai :<?php echo $model->Nilai; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nim',
		'Nip',
		'No_Mk',
		'Tgl_Ujian',
		'Jenis_Ujian',
		'Ruangan',
		'Nilai',
	),
)); ?>
