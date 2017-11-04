<?php
require_once"php/model/model_index.php";
require_once"php/view/view_index.php";

class Controller_index
{
	public function index()
	{
		$model_index = new Model_index();
		$view_index = new View_index();

		$themes = $model_index->get_themes();
		$view_index->view_themes($themes);
	}
}

?>