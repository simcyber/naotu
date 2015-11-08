<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _initialize(){
		$this->title="思维脑图";
		$str="login,reg,do_reg,do_login";
		if(strstr($str,ACTION_NAME)){
			
		}else{
			if(!$_SESSION['is_login']){
				$this->display("login");
				exit;
			}
		}

	}
    public function index(){
		$ids=I("get.");
		if($ids['tag']){
			$con['tag']=urldecode($ids['tag']);
		}
		$con['email']=$_SESSION['email'];
		$count = M('naotu_data')->where($con)->count();
		$per=10;
		$Page = new \Think\Page($count,$per);
		$show = $Page->show();
		$list = M('naotu_data')->where($con)->order('datetime desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('rs',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$sql="SELECT  `tag` ,  `email` FROM  `naotu_data` WHERE  `email` LIKE  '".$_SESSION['email']."' GROUP BY tag";
		$this->tags=M('naotu_data')->query($sql);
		$this->display();
    }
	
	public function login(){
		$this->display();
	}
	
	public function logout(){
		session_unset();
		session_destroy();
		$this->display("login");
	}
	
	public function do_login(){
		$p=I("post.");
		$con['email']=$p['email'];
		$con['password']=md5($p['password']);
		$tmp=M('userinfo')->where($con)->find();
		if($tmp){
			$_SESSION['email']=$p['email'];
			$_SESSION['is_login']=true;
			$this->success("登录成功!",U('Index/index'));
		}else{
			$this->error("用户名密码错误！",U('Index/index'));
		}
	}
	
	public function reg(){
		$this->display();
	}
	
	public function do_reg(){
		$p=I("post.");
		if($p['password']!=$p['repassword']){
			$this->error("两次密码不一致~");
			exit;
		}
		$con['email']=$p['email'];
		$tmp=M('userinfo')->where($con)->find();
		if($tmp){
			$this->error("您已经有账号啦~请到首页登录！",U('Index/index'));
			exit;
		}else{
			$_SESSION['email']=$r['email']=$p['email'];
			$r['password']=md5($p['password']);
			M('userinfo')->add($r);
			$_SESSION['is_login']=true;
			
			$this->success("注册成功！",U('Index/index'));
		}
	}
	
	public function add_new(){
		$p=I("post.");
		$p['email']=$_SESSION['email'];
		$nid=M('naotu_data')->add($p);
		$arr['nid']=$nid;
		$data['url']  = U('Edit/index',$arr);
		$this->ajaxReturn($data);
	}
}