<?php
/***
 * �û����û���Ϣ��֤
 */
class VZV_Userbase 
{
	public  $_model; //ע����Ϣ
	public $_VZV_SQL_Model;
	function  __construct($model)
	{	
		$this->_model=$model;
	}   
	   
	//��֤�û��Ƿ����
	public function ver_username()
	{			
	    $record = UserBase::model()->findByAttributes(array('username'=>$this->_model->username));       
        if($record!=null)
        {          
			$this->_VZV_SQL_Model=$record;
        	return true;
        }
		return  false;		
	}
	//��֤�����Ƿ��Ѵ���
	public function ver_mail()
	{
		$record = UserBase::model()->findByAttributes(array('e_mail'=>$this->_model->e_mail));       
		if($record!=null)
		{
			$this->_VZV_SQL_Model=$record;
			return true;
		}
		return  false;
		
	}
	
}