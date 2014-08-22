<?php
/***
 * 用户表用户信息验证
 */
class VZV_Userbase 
{
	public  $_model; //注册信息
	public $_VZV_SQL_Model;
	function  __construct($model)
	{	
		$this->_model=$model;
	}   
	   
	//验证用户是否存在
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
	//验证邮箱是否已存在
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