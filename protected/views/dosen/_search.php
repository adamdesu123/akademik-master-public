<?php
/* @var $this DosenController */
/* @var $model Dosen */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Nip'); ?>
		<?php echo $form->textField($model,'Nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nama_Dosen'); ?>
		<?php echo $form->textField($model,'Nama_Dsn',array('size'=>30,'maxlength'=>30)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
