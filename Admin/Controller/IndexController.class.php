<?php
/**
 * @Author [ Wake1 ]
 * @Email [ 573358951@qq.com ]
 * @Last Modified time: 2016-07-01 20:12:02
 */
namespace Admin\Controller;
use \Think\Controller;
use Think\Auth;


class IndexController extends BaseController
{
	public function index()
	{

		$m = M('auth_group_access');
	    $auth_rule = $m->field($field)->where()->select();	 

	 	$uid =  $_SESSION['user']['id'];
	 	// echo $uid;

	 	$arr=array();
	 	foreach ($auth_rule as $key => $value) {
	 		if($value['uid'] == $uid)
	 		{
	 			$arr[]= $value;
	 		}
	 	}
	 	 $uid= $arr[0]['uid'];
	 	 $group_id= $arr[0]['group_id'];
	 	 $auto_list=M("auth_group")->where("id=$group_id")->find();
	 	 // p($auto_list);
	 	 $node= $auto_list['rules'];
	 	 $arrNode=explode(",", $node);
	 	 // p($arrNode);
	 	 $auth_rule = M("auth_rule")->field("id,pid,name,icon,title")->select();
	 	 // p($auth_rule);
	 	 $arr2 = array();
	 	 foreach ($auth_rule as $key => $value) {
	 	 	if(in_array($value['id'], $arrNode)){
	 	 		$arr2[] = $value;
	 	 	}
	 	 }
	 	 // dump($this->getMenu($arr2));

	 	$arr2 = $this->getMenu($arr2);
	 	$this->assign("list", $arr2);

		$this->display();
	}

	public function moren()
	{
		$this->display();
	}

	public function left()
	{
		$this->display();
	}

	public function head()
	{
		$this->display();
	}
}