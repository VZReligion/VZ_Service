﻿<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="zh"> <!--<![endif]-->  
<head>
    <title>Vanzer Basesite</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/css/headers/header1.css" />
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/plugins/bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/css/style_responsive.css" />
    <link rel="shortcut icon" href="favicon.ico" />        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/plugins/font-awesome/css/font-awesome.css" />
	    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/plugins/flexslider/flexslider.css" type="text/css" media="screen" />    	
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/plugins/parallax-slider/css/parallax-slider.css" type="text/css" />
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/css/themes/default.css" id="style_color" />
    <link rel="stylesheet" href="<?php echo $this->_theme->baseUrl;?>/css/themes/headers/default.css" id="style_color-header-1" />  
	<script type="text/javascript" src="<?php echo $this->_theme->baseUrl;?>/js/jquery-1.8.2.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head> 
<body>


<!--=== Style Switcher ===-->    
<i class="style-switcher-btn icon-cogs"></i>
<div class="style-switcher">
    <div class="theme-close"><i class="icon-remove"></i></div>
    <div class="theme-heading">Theme Colors</div>
    <ul class="unstyled">
        <li class="theme-default theme-active" data-style="default" data-header="light"></li>
     <!--   <li class="theme-blue" data-style="blue" data-header="light"></li>
        <li class="theme-orange" data-style="orange" data-header="light"></li>
        <li class="theme-red" data-style="red" data-header="light"></li>
        <li class="theme-light" data-style="light" data-header="light"></li>
		-->
    </ul>
</div><!--/style-switcher-->
<!--=== End Style Switcher ===-->    


    <!--=== Top ===-->
    <div class="top">
        <div class="container">
            <ul class="loginbar pull-right">
                <li>
                    <i class="icon-globe"></i><a>版本及语言 <i class="icon-sort-up"></i></a>
                    <ul class="nav-list">
                        <li class="active"><a href="#">V0.0.1中文</a> <i class="icon-ok"></i></li>
                        <li><a href="#">V0.0.1EN</a></li>

                    </ul>
                </li>
                <li class="devider">&nbsp;</li>
                <li><a href="#" class="login-btn">帮助</a></li>
                <li class="devider">&nbsp;</li>
				<?php if(Yii::app()->user->isGuest)
				{	
				?>
	
            <li><a href="<?php echo Yii::app()->createUrl('Van/Login');?>" class="login-btn">登录</a></li>
<li class="devider">&nbsp;</li>
			 <li><a href="<?php echo Yii::app()->createUrl('Van/register');?>" class="login-btn">注册</a></li>
			<?php }
		else
		{?>
	
				<li>欢迎用户： <a href="#"> <?php echo Yii::app()->user->name;?> </a> </li>
<li class="devider">&nbsp;</li>
				<li><a href="<?php echo Yii::app()->createUrl('Van/Logout');?>" class="login-btn"> 退出</a></li>   

				<?php
			}
			?>
				
           
            </ul>
        </div>
    </div><!--/top-->

<!--=== End Top ===-->    

  <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
               <a href="<?php echo Yii::app()->createUrl('');?>""><img id="logo-header" src="<?php echo $this->_theme->baseUrl;?>/img/VZ_Logo.png" alt="Logo" /></a>
       </div><!-- /logo -->
            <!-- Menu -->
            <div class="navbar">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a><!-- /nav-collapse -->
                    <div class="nav-collapse collapse">
                        <ul class="nav top-2">
                            <li class="active">
                              <a href="<?php echo Yii::app()->createUrl('');?>" >
                                    首页

                                </a>

                            </li>
                            <li>
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    Myself
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/MusikAPP">每日提示</a></li>                                   
                                    <li><a href="/MusikAPP">小天地</a></li>   
                                </ul>
                                <b class="caret-out"></b>
                            </li>
                            <li>
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    站内资讯
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="news.html">新闻</a></li>                               
                                   
                                </ul>
                                <b class="caret-out"></b>
                            </li>
                            <li>
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    应用
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="/MusikAPP">音乐平台</a></li>

                                </ul>
                                <b class="caret-out"></b>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    关于
                                </a>
                            </li>
                            <li><a class="search"><i class="icon-search search-btn"></i></a></li>
                        </ul>
                        <div class="search-open">
                            <div class="input-append">
                                <form />
                                <input type="text" class="span3" placeholder="输入搜索关键字" />
                                <button type="submit" class="btn-u">搜索</button>
                                </form>
                            </div>
                        </div>
                    </div><!-- /nav-collapse -->
                </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
        </div><!-- /container -->
    </div><!--/header -->
