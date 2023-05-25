<?php

/**
 * This is the model class for table "tbl_dosen".
 *
 * The followings are the available columns in table 'tbl_dosen':
 * @property integer $Nip
 * @property string $Nama_Dsn
 * @property string $Tgl_Lahir
 * @property string $Jenis_Kelamin
 * @property string $Agama
 * @property string $Alamat
 *
 * The followings are the available model relations:
 * @property TblNilai[] $tblNilais
 */
class Dosen extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_dosen';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nip, Nama_Dsn, Tgl_Lahir, Jenis_Kelamin, Agama, Alamat', 'required'),
			array('Nip', 'numerical', 'integerOnly'=>true),
			array('Nip', 'unique', 'message'=>'NIP Already Exist!'),
			array('Nama_Dsn', 'length', 'max'=>30),
			array('Jenis_Kelamin', 'length', 'max'=>6),
			array('Agama', 'length', 'max'=>9),
			array('Alamat', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Nip, Nama_Dsn, Tgl_Lahir, Jenis_Kelamin, Agama, Alamat', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'tblNilais' => array(self::HAS_MANY, 'TblNilai', 'Nip'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Nip' => 'Nip',
			'Nama_Dsn' => 'Nama Dsn',
			'Tgl_Lahir' => 'Tgl Lahir',
			'Jenis_Kelamin' => 'Jenis Kelamin',
			'Agama' => 'Agama',
			'Alamat' => 'Alamat',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Nip',$this->Nip);
		$criteria->compare('Nama_Dsn',$this->Nama_Dsn,true);
		$criteria->compare('Tgl_Lahir',$this->Tgl_Lahir,true);
		$criteria->compare('Jenis_Kelamin',$this->Jenis_Kelamin,true);
		$criteria->compare('Agama',$this->Agama,true);
		$criteria->compare('Alamat',$this->Alamat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dosen the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
