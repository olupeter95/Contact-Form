<?php

require_once 'config/Database.php';
require_once 'class/Contact.php';

$database = new Database();
$db = $database->getConnection();

$contact = new Contact($db);

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Contact Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
	<body>
	<section class="ftco-section bg-white">
		<div class="container">
			<div class="row justify-content-center">
				<div class="table-responsive table-bordered p-3">
					<table class="table table-bordered" id="info">
					<thead class="thead-dark">
					<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Email</th>
					<th scope="col">Subject</th>
					<th scope="col">Message</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$contact->view();
						?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
	$(function(){
		$('#info').dataTable()
	})
  </script>

	</body>
</html>

