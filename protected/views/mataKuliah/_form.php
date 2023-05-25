<?php
/* @var $this MataKuliahController */
/* @var $model MataKuliah */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mata-kuliah-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'No_Mk'); ?>
		<?php echo $form->textField($model,'No_Mk'); ?>
		<?php echo $form->error($model,'No_Mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nama_Mata_Kuliah'); ?>
		<?php echo $form->textField($model,'Nama_Mk',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nama_Mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Sks'); ?>
		<?php echo $form->textField($model,'Sks'); ?>
		<?php echo $form->error($model,'Sks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
