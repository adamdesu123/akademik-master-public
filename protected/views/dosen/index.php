<?php
/* @var $this DosenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dosen',
);
?>

<h1>Dosen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
