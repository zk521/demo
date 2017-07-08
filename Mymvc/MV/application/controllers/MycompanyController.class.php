<?php

class MycompanyController extends Controller
{
    // 首页方法，测试框架自定义DB查询
    public function index()
    {
       
        $this->render();
    }


    //在线报名
    public function sign_up()
    {
    	$this->render();
    }

    //在线报名
    public function  sign_add()
    {

    	$data=$_POST;
    	$data['s_addtime']=date("Y-m-d H:i");
    	$count = new ItemModel('sign');
    	$res=$count->selectAll();
    	print_r($res);
    	// $res=$count->add($data);
    	// if ($res) {
    	// 	echo "留言成功";
    	// }
    	// $this->assign('count', $count);
     //    $this->render('sign_up');
        
    }


 }   