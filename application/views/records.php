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
		.attendance-head img{
                display: inline-block;
                width: 80px;
                height: 80px;
            }
			.error div{
                color: red !important;
				text-align: center;
            }

	</style>
</head>
<body>
	<div class="container">
		<div class="attendance-head">
			<h1><img src="/assets/image/cdm.png" alt=""> Colegio De Montalban Attendance Party</h1>
			<h2><?= $subject; ?></h2>
			<h3><?= $date; ?></h3>
			<h3><?= $time; ?></h3>
		</div>
		<div class="attendance-record">
			
			<table class="table">
				<tr>
					<th>Seat No.</th>
					<!-- <th>Student No.</th> -->
					<th>Student Name</th>
					<th>Time In</th>
				</tr>
<?php
		$count = 0;
		foreach($records as $record){
			$count++;
?>
				<tr>
					<td>SEAT-23000<?= $record['seat_no']; ?></td>
					<td><?= $record['last_name']?>, <?= $record['first_name']?></td>
					<td>13:<?= $record['present_time'] ?></td>
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