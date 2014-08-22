<?php

/**
 * This is the model class for table "vzdb_user".
 *
 * The followings are the available columns in table 'vzdb_user':
 * @property integer $ID_user
 * @property string $username
 * @property string $password
 * @property string $e_mail
 * @property integer $email_ver
 * @property integer $tel_num
 * @property integer $tel_ver
 * @property integer $point
 * @property integer $money
 * @property integer $regtime
 * @property string $regip
 * @property integer $logintime
 * @property string $loginip
 * @property string $loginaddress
 */
class UserBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vzdb_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, e_mail, regtime, regip, logintime', 'required'),
			array('email_ver, tel_num, tel_ver, point, money, regtime, logintime', 'numerical', 'integerOnly'=>true),
			array('username, password', 'length', 'max'=>32),
			array('e_mail', 'length', 'max'=>55),
			array('regip, loginip', 'length', 'max'=>20),
			array('loginaddress', 'length', 'max'=>120),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_user, username, password, e_mail, email_ver, tel_num, tel_ver, point, money, regtime, regip, logintime, loginip, loginaddress', 'safe', 'on'=>'search'),
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
			'ID_user' => '用户ID',
			'username' => '用户名',
			'password' => '登录密码',
			'e_mail' => '邮箱',
			'email_ver' => '邮箱状态',
			'tel_num' => '手机号码',
			'tel_ver' => '手机验证状态',
			'point' => '会员积分',
			'money' => '余额',
			'regtime' => '注册时间',
			'regip' => '注册IP',
			'logintime' => '登录时间',
			'loginip' => '登录IP',
			'loginaddress' => '登录地址',
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

		$criteria->compare('ID_user',$this->ID_user);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('e_mail',$this->e_mail,true);
		$criteria->compare('email_ver',$this->email_ver);
		$criteria->compare('tel_num',$this->tel_num);
		$criteria->compare('tel_ver',$this->tel_ver);
		$criteria->compare('point',$this->point);
		$criteria->compare('money',$this->money);
		$criteria->compare('regtime',$this->regtime);
		$criteria->compare('regip',$this->regip,true);
		$criteria->compare('logintime',$this->logintime);
		$criteria->compare('loginip',$this->loginip,true);
		$criteria->compare('loginaddress',$this->loginaddress,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
