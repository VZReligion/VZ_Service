<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Register extends UserBase
{	
	public $V_errMessage='NONE';  //错误提示
    public    $_ver; //验证类实例化

    
    public function verall( $bl_save=false )
	{
	//初始化验证类		
		$this->_ver=new VZV_Userbase( $this);	 
		if($this->_ver->ver_username())  //用户验证
	   {	 
			$this->V_errMessage='You input the username already exists, please re-entry.';
	   } else if ($this->_ver->ver_mail())   //邮箱验证
	   {	
			$this->V_errMessage="You input the E_mail already exists, please re-entry.";
	   } 
	   else {
	    if($bl_save)  //是否选择保存
	    {	    	
	    	if(!$this->save())
	    	{
					$this->V_errMessage="Unsuccessfully saved!";
	    	}	    	
	    }	    
	   }
	     return  $this->V_errMessage;	//返回出错信息
	}	
}
