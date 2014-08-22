
<?php
class VPC_nav
{
 //
 public static $urlarr=array();
 
	public static function GetNavArr($siteid=1)
 {  
  $row=NavBase::model()->findall('siteid=:id',array(':id'=>$siteid));
  self::CreateNavArr($row);
  return self::$urlarr;
 }
 
 /********************************************************************
  *
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
	 * This is method GetNavHtml --
	 *
	 * @param mixed $siteid This is a 
	 * @return mixed This is the return 
	 *
	 * EX：GetNavHtml(1)
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
	 * This is method BuildChildren 
	 *
	 * @param mixed $id is FNAV_ID
	 * @return mixed This is the return  CH_NAV_ID
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

