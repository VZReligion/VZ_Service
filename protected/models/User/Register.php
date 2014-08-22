<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class Register extends UserBase
{	
	public $V_errMessage='NONE';  //������ʾ
    public    $_ver; //��֤��ʵ����

    
    public function verall( $bl_save=false )
	{
	//��ʼ����֤��		
		$this->_ver=new VZV_Userbase( $this);	 
		if($this->_ver->ver_username())  //�û���֤
	   {	 
			$this->V_errMessage='You input the username already exists, please re-entry.';
	   } else if ($this->_ver->ver_mail())   //������֤
	   {	
			$this->V_errMessage="You input the E_mail already exists, please re-entry.";
	   } 
	   else {
	    if($bl_save)  //�Ƿ�ѡ�񱣴�
	    {	    	
	    	if(!$this->save())
	    	{
					$this->V_errMessage="Unsuccessfully saved!";
	    	}	    	
	    }	    
	   }
	     return  $this->V_errMessage;	//���س�����Ϣ
	}	
}
