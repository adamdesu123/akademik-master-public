<?php
/* @var $this MahasiswaController */
/* @var $model Mahasiswa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mahasiswa-form',
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
		<?php echo $form->labelEx($model,'Nama_Mahasiswa'); ?>
		<?php echo $form->textField($model,'Nama_Mhs',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nama_Mhs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tanggal_Lahir'); ?>
		<?php Yii::import('ext.CJuiDateTimePicker.CJuiDateTimePicker');
$this->widget('CJuiDateTimePicker',array(
	 'model'=>$model, //Model object
	 'attribute'=>'Tgl_Lahir', //attribute name
	 'mode'=>'date', //use "time", "date" or "datetime" (default)
	 'language' => '',
	 'options'=>array(
			 'dateFormat'=>'yy-mm-dd',
			//  'minDate' => '0',
		), // jquery plugin options
	'htmlOptions'=>array(
		 'placeholder'=>'ex: 2014-02-28',
	 ),
));
        ?>
		<?php echo $form->error($model,'Tgl_Lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Jenis_Kelamin'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'Jenis_Kelamin'); ?>
		<?php echo $form->error($model,'Jenis_Kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Agama'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'Agama'); ?>
		<?php echo $form->error($model,'Agama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Alamat'); ?>
		<?php echo $form->textArea($model,'Alamat',array('cols'=>60,'rows'=>4)); ?>
		<?php echo $form->error($model,'Alamat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
