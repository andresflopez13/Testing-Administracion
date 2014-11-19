<?php

/**
 * This is the model class for table "organizaciones".
 *
 * The followings are the available columns in table 'organizaciones':
 * @property integer $Nit
 * @property string $Email
 * @property string $Direccion
 * @property string $Telefono
 * @property string $Nombre
 * @property string $motivoCambioOrganizacion
 * @property string $Ciudad
 * @property string $validar
 */
class Organizaciones extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organizaciones';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Nit, Email, Direccion, Telefono, Nombre, motivoCambioOrganizacion, Ciudad, validar', 'required'),
			array('Nit', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Nit, Email, Direccion, Telefono, Nombre, motivoCambioOrganizacion, Ciudad, validar', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Nit' => 'Nit',
			'Email' => 'Email',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'Nombre' => 'Nombre',
			'motivoCambioOrganizacion' => 'Motivo Cambio Organizacion',
			'Ciudad' => 'Ciudad',
			'validar' => 'Validar',
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
                  
		$criteria->compare('Nit',$this->Nit);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('motivoCambioOrganizacion',$this->motivoCambioOrganizacion,true);
		$criteria->compare('Ciudad',$this->Ciudad,true);
		$criteria->compare('validar',$this->validar,true);
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                
                ));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Organizaciones the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
