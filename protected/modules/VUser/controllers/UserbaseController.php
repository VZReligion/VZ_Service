<?php

class UserbaseController extends Controller
{
	public function actionIndex()
	{
	  echo  "�û����������ӿ�--���崦��ʽ����ĵ�˵��";
	}
	//�ӿڵ�¼����
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
			echo '�ӿڴ���';
			}
	}
	//�û��˳�
	public function actionLogout()
	{
		Yii::app()->user->logout();
		echo '�˳��ɹ�';
	}	
	//�û�ע��
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