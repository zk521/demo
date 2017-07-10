<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/6/28
 * Time: 19:57
 */
class IndexController extends Controller{
   public function index(){

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