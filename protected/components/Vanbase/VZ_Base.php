<?php
/**
 * @author        Vanzer
 * @copyright     Copyright (c) 2014-now Vanzerself. All rights reserved.
 * @description   Van_Vanver_Vanzer  ----PHP 
 * @version       v0.0.1α1
 */
class VZ_Base extends Controller
{
	public $layout = '';  
	protected $is_login=false;
	protected $id_admin=false;
	/**
	* @see CController::init()
		 */
	public function init ()
	{
		parent::init();
		$this->checkLogin();		
	}	
	public function  checkLogin()
	{
		
		if(Yii::app()->user->isGuest)
		{
			$this->is_login=false;
		}
		else{
		
			//操作时间判定
			if(time()-Yii::app()->user->laset_time> Yii::app()->params['paramName'])
			{					
				//登录时间过期
				}
			else{
				Yii::app()->user->laset_time=time();				
				}
			
			$this->is_login=true;
			
		}		
	}
}