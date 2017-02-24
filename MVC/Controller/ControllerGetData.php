<?php

namespace MVC\Controller;
use MVC\Model\DataQuery;
require_once("MVC/Model/DataQuery.php");
require_once("MVC/View/ResponseData.php");

/**
* Controller data
*/
class ControllerGetData
{
	
	public function __construct()
	{
		# code...
	}

	public function response_get_data() {
		$dataQuery = new \MVC\Model\DataQuery();
		$data = $dataQuery->getData();
		$view = new \MVC\View\ResponseData($data);
		$response = $view->createView();
		return $response; 
	}

	public function response_delete_data($title) {
		$dataQuery = new \MVC\Model\DataQuery();
		$dataQuery->delCategory($title);
		$data = $dataQuery->getData();
		$view = new \MVC\View\ResponseData($data);
		$response = $view->createView();
		return $response;
	}

	public function response_add_data($title,$content,$author,$cate_id) {
		$dataQuery = new \MVC\Model\DataQuery();
		$dataQuery->addNew($title,$content,$author,$cate_id);
		$data = $dataQuery->getData();
		$view = new \MVC\View\ResponseData($data);
		$response = $view->createView();
		return $response;
	}
}