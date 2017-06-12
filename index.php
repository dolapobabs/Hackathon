<!DOCTYPE html>
<html>
	<head>
		<title> Welcome to CrowdFund </title>
		<link rel='stylesheet' href='css/main.css'>
		<link rel='icon' href='images/logo.png'>
		<!-- Latest compiled and minified CSS -->
		<!-- <link rel="stylesheet" href='css/bootstrap.min.css'> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<style>	
			h1{
				font-size:52px;	
			}
			h2{
				font-size: 34px;
			}
			input[type=text]{
				padding:5px;
				
			}input[type=email]{
				padding:5px;
				
			}input[type=password]{
				padding:5px;
				
			}
			label{
				color:white;
				text-align:left;
			}
			form{
				text-align:center;
			}
			.button{
					background:transparent;
					border:2px solid white;
					color:white;
					transition:all .5s ease-in;
				}
				.button:hover{
					border:2px solid gray;
					color:white;
				
				}
			
		</style>
	</head>
	<body>
			<section class='container-fluid'>
			
				<section id='box'>
					<strong><h1 style='text-align:center; color:white;'> Welcome to CrowdFund </h1> </strong>
					<h2 id='h2' style='text-align:center; color:white'> Are you a </h2> <br>
					<section class='inner-box' style='text-align:center; color:white;'>
						<button class='btn' id='stdBtn'> STUDENT </button>
						<br>
						<strong><h4 style='text-align:center;'> OR </h4> </strong>
						<button  class='btn' id='fndBtn'> FUNDER </button>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>

					</section>
				
			</section>
		<?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = 'mysql';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
             if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $username= addslashes ($_POST['username']);
               $fname= addslashes ($_POST['fname']);
            }else {
               $username = $_POST['username'];
               $fname = $_POST['fname'];
            }
				$lname = $_POST['lname'];
            	$email = $_POST['email'];
				$gender = $_POST['gender'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];
            	
            $sql = "INSERT INTO users ". "(username, fname, lname, email, gender, password, cpassword) ". "VALUES('$username', '$fname', '$lname', '$email', '$gender', '$password', '$cpassword')";
               
            mysql_select_db('hackathon');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
		 }
		 else {
			 ?>
				<section id='form'>
				<form method='post' action = "<?php $_PHP_SELF ?>">
					<h3 style='color:white;'> Sign Up </h3>
					<label for='username'> Username</label><br>
					<input  type='text' name='username' placeholder='Username' id='username' required><br>
					<label for='name'> First Name</label><br>					
					<input  type='text' name='fname' placeholder='First Name' id='fname' required><br>
					<label for='lname'> Last Name</label><br>
					<input type='text' name='lname' placeholder='Last Name' id='lname' required><br>
					<label for='email'> Email  </label><br>
					<input type='email' name='email' placeholder='janet@email.com' id='email' required><br>
					<label for='gender'> Gender </label><br>
					<select name='gender' id='gender'>
						<option> Male </option>
						<option> Female </option>
						<option> Complicated </option>
					</select><br>
					<label for='password'> Set Password</label><br>
					<input type='password' name='password' id='password' placeholder='******' required><br>
					<label for='cpassword'> Confirm Password </label><br>
					<input type='password' name='cpassword' id='cpassword' placeholder='******' required><br>
					<input name='add' type='submit' value='register' class='btn button' id='add'>

				<section id='funder'>
				<form method='post' action = "<?php $_PHP_SELF ?>">
					<h3 stlye='color:white;'> Sign Up </h3>
					<label for='name'> First Name</label><br>					
					<input  type='text' name='fname' placeholder='First Name' id='fname' required><br>
					<label for='lname'> Last Name</label><br>
					<input type='text' name='lname' placeholder='Last Name' id='lname' required><br>
					<label for='email'> Email  </label><br>
					<input type='email' name='email' placeholder='janet@email.com' id='email' required><br>
					<label for='gender'> Gender </label><br>
					<select name='gender' id='gender'>
						<option> Male </option>
						<option> Female </option>
						<option> Complicated </option>
					</select><br>
					</form>

				
				
				</section>


				</form>
				<h2 style='text-align:center; color:white;'> OR </h2>
					<form method='post'>
						<h3 style='color:white;'> Log In </h3>
						<label for='username'> Username</label>
						<input  type='text' name='username' placeholder='Username' id='username' required>
						<label for='password'> Password</label>
						<input type='text' name='Password' placeholder='******' id='password' required>
						<input type='submit' value='Log in' class= 'btn button'>
						<br>
						<br>
					</form>
				<?php
		 	}
		 ?>


			</section>


			


		</section>
		<footer id='footer'> Hacked with <span class='glyphicon glyphicon-heart'> </span> in FUNAAB</footer>
		<script src='js/jquery.min.js'> </script>
		<script src='js/editor.js'> </script>
		

	</body>
</html>