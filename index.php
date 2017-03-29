<!DOCTYPE html>
<head>
  <title>PHP Basic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="public/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/style.css">
  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.min.js"></script>
</head>
<body>
 cuối
	<div class="container">
		<h1>PHP Training</h1>
			<div class="clearfix">
				<button type="button" class="btn btn-info btn-lg btn-modal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span>Add New</button>
				<!-- Add New Modal -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
					  <div class="modal-content">
					    <div class="modal-header">
					      <button type="button" class="close" data-dismiss="modal">&times;</button>
					      <h2 class="modal-title">Add New</h2>
					    </div>
					    <div class="modal-body">
					      	<div class="animate form">
								<form  action="" autocomplete="on"> 
									<div class="form-group">
										<label for="title">Title: *</label>
									    <input type="text" class="form-control" id="title" name="title">
									</div>
									<div class="form-group">
									    <label for="content">Content:</label>
									    <input type="text" class="form-control" id="content" name="content">
									</div>
									<div class="form-group">
										<label for="author">Author:*</label>
									    <input type="text" class="form-control" id="author" name="author">
									</div>
									<div class="form-group">
									    <label for="category">Category: *</label>
									    <input type="number" class="form-control" id="category" name="category">
									</div>
									<div>
										<button type="button" class="btn btn-default add-new">ADD</button>
									</div>
								</form>
							</div>
					    </div>
					  </div>
					</div>
				</div>
				<!-- Edit New Modal -->
				<div class="modal fade" id="editModal" role="dialog">
					<div class="modal-dialog">
					  <div class="modal-content">
					    <div class="modal-header">
					      <button type="button" class="close" data-dismiss="modal">&times;</button>
					      <h2 class="modal-title">Edit New</h2>
					    </div>
					    <div class="modal-body">
					      	<div class="animate form">
								<form  action="" autocomplete="on"> 
									<div class="form-group">
										<label for="title">Title: *</label>
									    <input type="text" class="form-control" id="edit_title" name="edit_title">
									</div>
									<div class="form-group">
									    <label for="content">Content:</label>
									    <input type="text" class="form-control" id="edi_content" name="edit_content">
									</div>
									<div class="form-group">
										<label for="author">Author:*</label>
									    <input type="text" class="form-control" id="edit_author" name="edit_author">
									</div>
									<div class="form-group">
									    <label for="category">Category: *</label>
									    <input type="number" class="form-control" id="edit_category" name="edit_category">
									</div>
									<div>
										<button type="button" class="btn btn-default edit-new">EDIT</button>
									</div>
								</form>
							</div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="btn-group" id="btn">
	              <div class="search"><input style="width:auto" type="search" class="form-control input-sm" placeholder="Search..." id="search" onkeyup="search();"/></div>
	        	</div>
			</div>
			<!-- Content -->
			<div id="content"></div>
	</div>
</body>
<script src="public/js/js.js"></script>
</html>

<?php