<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/6/28
 * Time: 19:57
 */
class CourseController extends Controller
{
	public function index($title,$id){
        	$items = new ItemModel('article');
                $data = ['nav_id'=>$id];
                $p = $items->selectAll($data);
                $num = count($p);
                $this->assign('items', $p);
                $this->assign('num', $num);
                $this->assign('title', $title);
        	$this->render();
	}

	public function content($title,$id){
        	$items = new ItemModel('article');
        	$art_id =array('art_id'=>$id); 
                $p = $items->select($art_id);
                $views = $p['views']+1;
                $data = array('views' => $views);
                $up = $items->update($art_id,$data);
                $p['content'] = '<p style="text-indent:2em;">';
                $art_content = str_replace("--",'</p><p style="text-indent:2em;">', $p['art_content']);
                $p['content'] .=$art_content;
                $p['content'] .='</p>'; 
                $this->assign('items', $p);
                $this->assign('views', $views);
                $this->assign('title', $title);
		$this->render();
	}
}