<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */

$this->breadcrumbs=array(
	'Mahasiswa'=>array('index'),
	'Create',
);
?>

<h1>Create Mahasiswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
