
<?php
class VPC_nav
{
 //保存转换后的导航数组
 public static $urlarr=array();
 
	public static function GetNavArr($siteid=1)
 {  
  $row=NavBase::model()->findall('siteid=:id',array(':id'=>$siteid));
  self::CreateNavArr($row);
  return self::$urlarr;
 }
 
 /********************************************************************
  * 数组转化
  * 把导航数组的子导航转换为以[’children‘.id]为键值的数组，的形式转换为数组
  * 防止每次查找子导航时候需要自己写遍历原数组
  *
  * 示例：查询ID为1的子导航是否存在只需
  * if（is_array（$arr['children'.'1']））
  * 如果为真 则存在；不为真则 不存在
  *
  * **********************************************************************/
 private static	function BuildNavArr($row)
 {
  if(is_array($row))
  {
   //	echo 'is arry';
   foreach ($row as $arr)
   {
    if($arr['parentid']==0)
				{
					self::$urlarr[]=$arr;
				}
				else{
					self::$urlarr['children'.$arr['parentid']][]=$arr;
				}
			}
		}
	}
	
	/**
	 * This is method GetNavHtml -- 返回导航HTML格式
	 *
	 * @param mixed $siteid This is a 站点ID
	 * @return mixed This is the return 返回导航栏目html字符串
	 *
	 * 示例：GetNavHtml(1)
	 * 返回站点ID为1的导航栏目
	 *    
	 */
	
	public static function GetNavHtml($siteid)
	{
		$arr=self::GetNavArr($siteid);
		$NavHtml=' <nav id="main-nav-menu"><ul class="sf-menu">';
		foreach($arr as $value=>$arr1)
		{
			if($arr1['parentid']==0 && !stristr($value,"children"))
			{
				$NavHtml.='<li><a href="'.$arr1["linkurl"].'">'.$arr1["navname"].'</a>';
				$NavHtml.=self::CreateChildren($arr1['ID_nav']);
				$NavHtml.='</li>';
			}
		}
		$NavHtml.=" </ul></nav>";
		return $NavHtml;
	}
	/**
	 * This is method BuildChildren 递归遍历主导航下子导航栏目
	 *
	 * @param mixed $id is 父级导航栏栏目ID
	 * @return mixed This is the return 子导航栏目ID
	 *
	 */
	private static function BuildChildren($id)
	{
		$Childrennav='';
		if(is_array(self::$urlarr['children'.$id]))
		{
			$Childrennav.='<ul>';
			foreach(self::$urlarr['children'.$id] as $Children)
			{
				$Childrennav.=' <li><a href="'.$Children['linkurl'].'">'.$Children['navname'].'</a>';
				$Childrennav.=self::CreateChildren($Children['ID_nav']);
				$Childrennav.='</li>';
			}
			$Childrennav.='</ul>';
			return $Childrennav;
		}
		else
			return $Childrennav;
	}
}
?>

