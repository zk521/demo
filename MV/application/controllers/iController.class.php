<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/6/28
 * Time: 19:57
 */
class IndexController extends Controller{
   public function index(){
//       $content = file_get_contents('http://localhost/MV/application/views/index/index.php');
//       $content = mb_convert_encoding($content, 'UTF-8', 'GBK');
//
//       file_put_contents('./aaa.php',$content);
       $this->render();

   }
    public function pr(){
        $this->render('project');
    }
    public function get(){

       echo  $this->redirect("set?id=1&name=2");
    }
    public function set(){
       print_r($_GET);
    }

}