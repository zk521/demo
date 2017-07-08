<?php
/**
 * 控制器基类
 */
class Controller
{
    protected $_controller;
    protected $_action;
    protected $_view;

    // 构造函数，初始化属性，并实例化对应模型
    public function __construct($controller, $action)
    {
        $this->_controller = $controller;
        $this->_action = $action;
        $this->_view = new View($controller, $action);
    }

    // 分配变量
    public function assign($name, $value)
    {
        $this->_view->assign($name, $value);
    }

    // 渲染视图
    public function render($view='')
    {
        $view=empty($view)?$this->_action:$view;
        $this->_view->render($view);
    }
    //跳转方法
    public function redirect($url='') {
        $param = substr($url,strrpos($url,'?')+1);

        $u = explode('/',$url);
        if(count($u)<=1){
            $url = APP_URL.'/'.$this->_controller.'/'.$url;
        }else{
            $url =APP_URL.'/'.$url;
        }
//        echo '<script>location.herf="'.$url.'"</script>';
        header("Location:".$url);
        exit();

    }
}