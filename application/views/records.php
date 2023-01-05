<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Attendance Party</title>
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
	<style>
		.attendance-head img{
                display: inline-block;
                width: 80px;
                height: 80px;
            }
	</style>
</head>
<body>
	<div class="container">
		<div class="attendance-head">
			<h1><img src="/assets/image/cdm.png" alt=""> Colegio De Montalban Attendance Party</h1>
			<h2>Subject</h2>
			<h3>Date Time</h3>
		</div>
		<div class="attendance-record">
			
			<table class="table">
				<tr>
					<th>Seat No.</th>
					<th>Student No.</th>
					<th>Student Name</th>
					<th>Time In</th>
				</tr>
			</table>
		</div>
		<form action="">
			<input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" values="<?= $this->security->get_csrf_hash(); ?>">
			<input type="text" name="student_no" placeholder="Enter ID number">
			<input type="password" name="password" placeholder="Enter password">
			<input type="submit" value="Time In" id="time-in">
		</form>
	</div>
</body>
</html>