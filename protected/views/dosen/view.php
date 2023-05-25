<?php
/* @var $this DosenController */
/* @var $model Dosen */

$this->breadcrumbs=array(
	'Dosen'=>array('index'),
	$model->Nip,
);
?>

<h1><?php echo $model->Nama_Dsn; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nip',
		'Nama_Dsn',
		'Tgl_Lahir',
		'Jenis_Kelamin',
		'Agama',
		'Alamat',
	),
)); ?>
