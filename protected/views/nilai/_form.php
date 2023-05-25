<?php
/* @var $this NilaiController */
/* @var $model Nilai */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nilai-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nim'); ?>
		<?php echo $form->textField($model,'Nim'); ?>
		<?php echo $form->error($model,'Nim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nip'); ?>
		<?php echo $form->textField($model,'Nip'); ?>
		<?php echo $form->error($model,'Nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'No_Mk'); ?>
		<?php echo $form->textField($model,'No_Mk'); ?>
		<?php echo $form->error($model,'No_Mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tgl_Ujian'); ?>
		<?php Yii::import('ext.CJuiDateTimePicker.CJuiDateTimePicker');
$this->widget('CJuiDateTimePicker',array(
	 'model'=>$model, //Model object
	 'attribute'=>'Tgl_Ujian', //attribute name
	 'mode'=>'datetime', //use "time", "date" or "datetime" (default)
	 'language' => '',
	 'options'=>array(
			 'dateFormat'=>'yy-mm-dd',
			 'timeFormat'=>'hh:mm:ss',
			//  'minDate' => '0',
		), // jquery plugin options
	'htmlOptions'=>array(
		 'placeholder'=>'ex: 28-02-2014 03:22:45',
	 ),
));
        ?>
		<?php echo $form->error($model,'Tgl_Ujian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis_Ujian'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'Jenis_Ujian'); ?>
		<?php echo $form->error($model,'Jenis_Ujian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ruangan'); ?>
		<?php echo $form->textField($model,'Ruangan',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'Ruangan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Nilai'); ?>
		<?php echo $form->textField($model,'Nilai'); ?>
		<?php echo $form->error($model,'Nilai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
