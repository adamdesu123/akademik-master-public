<?php
/* @var $this MataKuliahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mata Kuliah',
);
?>

<h1>Mata Kuliah</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
