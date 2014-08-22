<?php
//登录后用户信息存储  
//Yii::app()->user->_userinfo
//Yii::app()->user->regip
class VZ_Userinfo extends CWebUser
{
    
	public function __get($name)
	{
		if ($this->hasState('__userInfo')) {
			$user=$this->getState('__userInfo',array());
			if (isset($user[$name])) {
				return $user[$name];
			}
		}		
		return parent::__get($name);
	}
	
	public function login($identity, $duration=0) {
		$this->setState('__userInfo', $identity->getUser());
		parent::login($identity, $duration);	
		
	}

	
	
}

?>