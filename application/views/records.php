<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <meta http-equiv="refresh" content="1"> -->
	<title>Attendance Party</title>
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
	<style>
			img{
                display: inline-block;
                width: 50px;
                height: 50px;
            }
			.error div{
                color: red !important;
				text-align: center;
            }
			h1{
				display: inline;
				margin-left: 10px;
				font-size: 1.5rem;
			}
			.col{
				width: 150px;
			}
			h3{
				display: inline-block; 
				text-align: start; 
				font-size: 1.5rem;
			}
	</style>
</head>
<body>
	<div class="head">
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid px-3">
				<a class="navbar-brand" style="width: 400px;" href="#"><img src="/assets/image/cdm.png" alt=""><h1>BSIT Attendance System</h1></a>
				<a class="nav-link active" aria-current="page" style="font-weight: bolder; font-size: 1.5rem" href="#"><?= $subject; ?></a>
				<div class="row">
					<div class="col"><?= $date; ?></div>
					<div class="col"><?= $time; ?></div>
				</div>
			</div>
		</nav>
	</div>
	<div class="container">
	<h2 class="my-2">ATTENDANCE RECORD</h2>
	<h3>Instructor: </h3>
	<div class="attendance-record">	
		<table class="table" style="border: 1px solid gray">
			<tr>
				<th>SEAT NUMBER</th>
				<th>STUDENT NAME</th>
				<th>TIME IN</th>
			</tr>
<?php
		$count = 0;
		foreach($records as $record){
			$count++;
?>
			<tr>
				<td><?= $record['seat_no']; ?></td>
				<td><?= $record['last_name']?>, <?= $record['first_name']?></td>
				<td><?= $time ?></td>
			</tr>
<?php
		}
?>
			</table>
		</div>
		<form action="/validate/timein" method="POST">
			<div class="error"><?= $this->session->flashdata('input_errors');?></div>
			<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" values="<?= $this->security->get_csrf_hash(); ?>">
			<input type="text" name="student_no" placeholder="Enter ID number">
			<input type="password" name="password" placeholder="Enter password">
			<input type="submit" value="Time In" id="time-in">
		</form>
	</div>
</body>
</html>