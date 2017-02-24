<?php

namespace MVC\View;

/**
* View class
*/
class ResponseData
{
	private $data;

	function __construct($data)
	{
		$this->data = $data;
	}

	public function createView() {
		$string = "";
		foreach($this->data as $key => $value) {
			$string .= '<div class="panel panel-default">
					      <div class="panel-heading">
					        <h4 class="panel-title">
					          <a data-toggle="collapse" data-parent="#accordion" href="#'.$key.'">'.$key.'</a> <span class="glyphicon glyphicon-remove" value="'.$key.'"></span>
					        </h4>
					      </div>
					      <div id="'.$key.'" class="panel-collapse collapse in">
					        <div class="panel-body">
					        	<table class="table table-hover" id="'.$key.'">
								    <thead>
								      <tr>
								        <th>Title</th>
								        <th>Content</th>
								        <th>Author</th>
								        <th>Category</th>
								        <th>Created at</th>
								        <th>Update at</th>
								        <th>Edit</th>
								      </tr>
								    </thead>
								    <tbody>';
								    foreach($value as $key1 => $value1) {
								    	$string .= '<tr>';
								    	$string .= '<td>'.$value1["title"].'</td>';
								    	$string .= '<td>'.$value1["content"].'</td>';
								    	$string .= '<td>'.$value1["user_id"].'</td>';
								    	$string .= '<td>'.$key.'</td>';
								    	$string .= '<td>'.$value1["created_at"].'</td>';
								    	$string .= '<td>'.$value1["updated_at"].'</td>';
								    	$string .= '<td><button type="button" data-toggle="modal" data-target="#editModal" ><span class="glyphicon glyphicon-edit"></span></button></td>';
								    	$string .= '</tr>';
								    }

			$string .=				'</tbody>
								</table>
					        </div>
					      </div>
					    </div>';
		}
		echo $string;
	}


}