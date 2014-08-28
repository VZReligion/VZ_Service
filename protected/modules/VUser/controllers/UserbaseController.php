<?php

class UserbaseController extends Controller
{
	public function actionIndex()
	{
	  echo  "用户基本操作接口--具体处理方式详见文档说明";
	}
	//接口登录处理
	public function actionLogin()
	{
		$model=new LoginForm;
		// if it is ajax validation request		
		// collect user input data
		if(isset($_POST['LoginForm']))
		{			
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			$model->validate(); 
			$model->login();			
			echo ( json_encode($model));
			exit;				
		
		}
		else{
			echo '接口错误';
			}
	}
	//用户退出
	public function actionLogout()
	{
		Yii::app()->user->logout();
		echo '退出成功';
	}	
	//用户注册
	public  function actionRegister()
	{		
		$model=new Register;
		if(isset($_POST['reg_form']))
		{			
			$model->attributes=$_POST['reg_form'];			
			$model->logintime='0';	
			$model->regip=Yii::app()->request->userHostAddress;	
			$model->regtime=time();			
			echo  $model->verall(true);
			exit;
			
		}
		$this->render('Register');		
		
	}
	
	
	

}