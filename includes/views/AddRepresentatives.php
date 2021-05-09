<!DOCTYPE html>
<html>

<head>
	<title>Add Representatives</title>

	<link rel="stylesheet" type="text/css" href="addForm.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		* {
			font-family: Arial;
			margin: 0px;
			padding: 0px;
		}

		body {
			overflow-y: auto;
		}


		.navbar {
			height: 100%;
			width: 300px;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			display: flex;
			flex-direction: column;
			background-color: #0D1B2A;
			overflow-y: auto;
		}

		.form {
			margin-top: 25px;
			margin-left: 350px;
			color: #0D1B2A;
			width: 70%;
			text-align: center;
		}

		.navbar {
			height: 100%;
			width: 300px;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			display: flex;
			flex-direction: column;
			background-color: #0D1B2A;
			overflow-y: auto;
		}


		.navbar a {
         text-decoration: none;
         font-size: 25px;
         color: white;
         padding: 10px;
         margin-left: 20px;
         height: 10vh;
         width: 100%;
         margin-top: 20px;
         display: block;
      }

		.navbar p {
			font-size: 25px;
			color: white;
			margin-bottom: 0px;
			padding: 10px;
			margin-top: 30px;
			margin-left: 20px;
			margin-bottom: 0px;
		}

		.navbar a:hover {
			color: #778DA9;
		}

		.element1 {
			margin-top: 30px;
		}

		.topbar {
			margin-top: 20px;
			margin-left: 315px;
			margin-bottom: 20px;
			display: flex;
			flex-direction: row;
			align-items: center;
			align-content: center;
			justify-content: center;
		}

		.go {
			background-color: #0D1B2A;
			padding: 5px;
			font-size: 17px;
			background-color: #0D1B2A;
			border: 2px solid #0D1B2A;
			border-radius: 10px;
			color: white;
		}


		table {
			margin-top: 0px;
			margin-left: 350px;
			color: #0D1B2A;
			width: 70%;
			text-align: center;
		}

		td {
			border: 1px solid #ddd;
			padding: 5px;
		}

		tr:hover {
			background-color: #778DA9;
		}

		th {
			border: 1px solid #ddd;
			padding-top: 10px;
			padding-bottom: 10px;
			background-color: #0D1B2A;
			color: white;
		}

		table button {
			background-color: #fff;
			border: none;
			padding: 2px;
		}

		.quantity {
			padding: 1px;
			margin: 0;
		}

		input[type=text],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: #0D1B2A;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=number],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=date],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=password],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
	</style>
</head>

<body>
    <div class="navbar">
        <a href="home"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
        <a href="medicines"><i class="fa fa-medkit" aria-hidden="true"></i> Medicines</a>
        <a href="sale"><i class="fa fa-money" aria-hidden="true"></i> Sales</a>
        <a href="shortage"><i class="fa fa-archive" aria-hidden="true"></i> Shortage</a>
        <a href="update"><i class="fa fa-pencil" aria-hidden="true"></i> Update</a>
        <a href="employees"><i class="fa fa-users" aria-hidden="true"></i> Employees</a>
        <a href="companies"><i class="fa fa-building" aria-hidden="true"></i> Companies</a>
        <a href="representatives"><i class="fa fa-users" aria-hidden="true"></i> Representatives</a>
        <a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
    </div>


	<div class="form">
		<form action="addRepresentatives" method="post">
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" required>

			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" required>

			<label for="phone_number">Phone Number</label>
			<input type="text" name="phone_number" required>

			<label for="company_name">Company Name</label>
			<input type="text" name="company_name" required>

			<input type="submit" value="Submit">
		</form>
	</div>
</body>

</html>