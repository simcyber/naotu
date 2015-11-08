<?php
namespace Home\Controller;
use Think\Controller;
class DemoController extends Controller {
	public function _initialize(){
		$this->title="思维脑图";
		$ids=I("get.");
		if($ids['nid']){
			$con['nid']=$ids['nid'];
			$rs=M('naotu_data')->where($con)->find();
			$rs['body']=htmlspecialchars_decode($rs['body']);
			$this->rs=$rs;	
		}

	}
    public function index(){
        $this->display();
    }
}