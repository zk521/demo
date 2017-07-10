<?php
	//专家团队
	class ExpertController extends controller{
		//展示专家页面
		public function expert() {
			//将数据库数据查询出来
			$teacher = new TeachersModel();
			$teachers = $teacher->selectAll();
			// //总条数 每页条数 页数
			$num = count($teachers);

			$this->assign('num',$num);
			$this->assign('teachers', $teachers);
			$this->render();
		}
		//todo还没有生成静态页面
		public function content() {
			$id = $_GET['id'];
 			$teachers = (new TeachersModel)->select(['t_id'=>$id]);
 			$this->assign('teachers',$teachers);
 			$this->render();

 			//静态化
// 			$con = file_get_contents('content.tpl');
// 			$con = str_replace('{name}', $teachers['t_name'], $con);
// 			$con = str_replace('{images}', $teachers['t_image'], $con);
// 			$con = str_replace('{content}', $teachers['t_introduce'], $con);
// 			file_put_contents($id.'.html', $con);
		}
	}
	