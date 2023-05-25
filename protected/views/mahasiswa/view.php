<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswas'=>array('index'),
	$model->Nim,
);
?>

<h1><?php echo $model->Nama_Mhs; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nim',
		'Nama_Mhs',
		'Tgl_Lahir',
		'Jenis_Kelamin',
		'Agama',
		'Alamat',
	),
)); ?>
