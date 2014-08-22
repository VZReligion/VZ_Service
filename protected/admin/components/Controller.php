<?php
/**
 * @author        Vanzer
 * @copyright     Copyright (c) 2014-now Vanzerself. All rights reserved.
 * @description   Van_Vanver_Vanzer  ----PHP 
 * @version       v0.0.1¦Á1
 */

class Controller extends CController
{
    public $layout = '';
	protected $_theme;
	protected $_themePath;
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
    /**
	 * @see CController::init()
	 */
    public function init ()
    {
		$this->_theme = Yii::app()->theme;
		$this->_themePath = str_replace(array('\\', '\\\\'), '/', Yii::app()->theme->basePath);
    }

  
    
}