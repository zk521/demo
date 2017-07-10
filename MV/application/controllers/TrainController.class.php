<?php
/**
 * 培训信息
 */
class TrainController extends Controller
{
	//展示主题
	public function train()
	{
		//实例化model层
		$data = (new ArticleModel)->selectAll();

		$this->assign('table', $data);
		$this->render('train');
	}

	//浏览次数+1
	public function look()
	{
		$id['art_id'] = $_POST['art_id'];

		$data = (new ArticleModel)->select($id);

		$views = $data['views']+1;

        $bloon = (new ItemModel)->query("UPDATE article SET `views`='$views' WHERE `art_id` = '$id[art_id]'");
		if($bloon) {
			echo 1;
		}
	}

	public function train_info()
	{
		$id['art_id'] = $_GET['art_id'];

		$data = (new ArticleModel)->select($id);
		
		$this->assign('info', $data);
		$this->render('train_info');
	}
}