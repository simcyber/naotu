<?php
namespace Home\Controller;
use Think\Controller;
class EditController extends Controller {
	public function _initialize(){
		$this->title="思维脑图";
		$ids=I("get.");
		$rs=M('naotu_data')->where($ids)->find();
		if($_SESSION['email']==$rs['email']){
			$rs['body']=htmlspecialchars_decode($rs['body']);
			$this->rs=$rs;
			
		}else{
			$this->error("您没有权编辑这个脑图哎",U('Index/index'));
		}
	}
    public function index(){
		$this->ids=I("get.");
        $this->display();
    }
	
	public function save_naotu(){
		$p=I("post.");
		$ids=I("get.");
		$con['nid']=$ids['nid'];
		$r['body']=$p['b'];
		$r['imgs']=$p['imgs'];
		$r['datetime']=date("Y-m-d H:i:s");
		M('naotu_data')->where($con)->save($r);
		$data['msg']="保存成功！";
		$this->ajaxReturn($data);
	}
	
	public function add(){
		
		
	}
}