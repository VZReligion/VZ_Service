<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity{
	
	public $VL_errorMessage;	
	public $user;//userinfo
	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	public function authenticate()
	{
		
		$VZV_userbase=new VZV_UserBase($this);
		if(!$VZV_userbase->Ver_username())
		{
			$this->VL_errorMessage = 'You enter the username does not exist!--VZ';
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if($VZV_userbase->_VZV_SQL_Model->password!==$this->password)
		{
			$this->VL_errorMessage = ' Password is incorrect!--VZ';
			$this->errorCode=self::ERROR_PASSWORD_INVALID;			
		}       
		else
		{         
			$this->setState('laset_time',121211);
			$this->setUser($VZV_userbase->_VZV_SQL_Model);      
			$this->setState('title', $VZV_userbase->_VZV_SQL_Model->username);
			$this->errorCode=self::ERROR_NONE;			
		}		
		unset($user);
		return !$this->errorCode;
		
	}	
	
	public function getUser()
	{
		return $this->user;
	}
	
	public function setUser(CActiveRecord $user)
	{
		$this->user=$user->attributes;
	}
}