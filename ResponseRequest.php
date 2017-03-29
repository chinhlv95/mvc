<?php

require_once("MVC/Controller/ControllerGetData.php");

if(isset($_GET['type'])) {
	if($_GET['type']=='delete') {
		$del_title = $_GET['title'];
		$control = new \MVC\Controller\ControllerGetData();
		$control->response_delete_data($del_title);
	}
	if($_GET['type']=='add') {
		$title = $_GET['title'];
		$content = $_GET['content'];
		$author = $_GET['author'];
		$cate_id = $_GET['cate_id'];
		$control = new \MVC\Controller\ControllerGetData();
		$control->response_add_data($title,$content,$author,$cate_id);
	}
}
else {
	$control = new \MVC\Controller\ControllerGetData();
	$control->response_get_data();

}
