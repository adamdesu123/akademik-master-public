<?php
/* @var $this MahasiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mahasiswa',
);
?>

<h1>Mahasiswa</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
