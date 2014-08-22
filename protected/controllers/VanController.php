<?php

class VanController extends VZ_Base
{
	public function actionIndex()
	{
		

		$this->render('index');
	} 
	public function actionLogin()
	{
		if($this->is_login)
		{
			echo 'Already Login!';
			exit;
		}
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
			//$this->redirect(Yii::app()->user->returnUrl);
		}
		$breadcrumbs=' <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li><a href="">Pages</a> <span class="divider">/</span></li>
            <li class="active">Login</li>';			
		
		// display the login form
		$this->render('login',array('breadcrumbs'=>$breadcrumbs));
	}
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
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
	
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}