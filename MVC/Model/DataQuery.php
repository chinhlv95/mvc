<?php

namespace MVC\Model;
use MVC\Model\PDOData;
require_once("PDOData.php");
/**
* Query
*/
class DataQuery
{
	
	function __construct()
	{
		# code...
	}

	function getCategories() {

		$db = new \MVC\Model\PDOData("root","");
		$data = $db->selectData('select * from categories');
		$db = null;
		return $data;
	}
	function delCategory($title){
		$db = new \MVC\Model\PDOData("root","");
		$db->executeData('delete from categories where name=\''.$title.'\'');
	}
	function getNews($cate) {

		$db = new \MVC\Model\PDOData("root","");
		$data = $db->selectData('select * from news where category_id = \''.$cate.'\'');
		return $data;
	}
	function addNew($title,$content,$author,$cate_id) {

		$db = new \MVC\Model\PDOData("root","");
		$db->executeData('insert into news(title,content,author,category) values (\''.$title.'\',\''.$content.'\',\''.$author.'\',\''.$cate_id.'\')');
	}
	function getData() {
		$data ;
		$homed = array();
		$catedb = $this->getCategories();
		for($i=0; $i<count($catedb); $i++) {
			$cateID = $catedb[$i]["id"];
			foreach($catedb[$i] as $key => $value) {
				if($key == "name") {
					$newdb = $this->getNews($cateID);
					$data[$value] = $newdb;
				}
			}
		}
		return $data;
	}
}