<?php
/* @var $this NilaiController */
/* @var $model Nilai */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Nim'); ?>
		<?php echo $form->textField($model,'Nim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nip'); ?>
		<?php echo $form->textField($model,'Nip'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'No_Mk'); ?>
		<?php echo $form->textField($model,'No_Mk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tanggal_Ujian'); ?>
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
	</div>

	<div class="row">
		<?php echo $form->label($model,'Jenis_Ujian'); ?>
		<?php echo ZHtml::enumDropDownList( $model,'Jenis_Ujian'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Ruangan'); ?>
		<?php echo $form->textField($model,'Ruangan',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nilai'); ?>
		<?php echo $form->textField($model,'Nilai'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
