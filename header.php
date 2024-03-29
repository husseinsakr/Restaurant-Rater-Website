<?php
    session_start();
?>

<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<title>Restaurant Rating Database</title>
	</head>

	<body>
		<header>
			<?php
				$GLOBALS['cityName'] = "Ottawa";
			?>
			
			<div class='header wrapper'>
				
				<!--
				<div class='searchbox'>
					<form action='includes/city.inc.php' method='POST'>
						<input type="search" name="search" placeholder="Enter your city name"/>
						<button type='submit'>Search</button><br/>
					</form>
				</div>
				-->
				<div id='userbox'>
					<?php
						if(isset($_SESSION['u_id'])){
							echo"<form action='includes/logout.inc.php' method='POST'>
									<text>Logged in as: <b> $_SESSION[u_uid] </b>
									<button type='submit' name='submit'>LOG OUT</button>
								 </form>";
						} else { 
							echo"<form action='includes/login.inc.php' method='POST'>
									<input type='text' name='uid' placeholder='Username' maxlength='16' size = '10'>
									<input type='password' name='pwd' placeholder='Password' maxlength='16' size = '10'>
									<button type='submit' name='submit'>LOGIN</button>
								 </form>
								 <form action='signup.php'>
									<button type='submit' style='text-align: right;'>SIGN UP</button>
								 </form>
								 ";
						}
					?>
				</div>
				
				<div class='cityname'>
					<?php
						echo "<text>$cityName</text>";
					?>
				</div>
				
				<div id = "maintab">
					<ul>
						<li><a href="index.php">Home</a></li>
						<?php
							if(isset($_SESSION['u_id'])){
								echo "<li><a href='profile.php?userid=$_SESSION[u_id]&useridloggedin=$_SESSION[u_id]'>Profile</a></li>";
							}
						?>
						<li><a href="raters.php">Raters</a></li>
						<li><a href="menuitems.php">Menu Items</a></li>
					</ul>
				</div>
			</div>
			
			
		</header>
	</body>
	<br>
	<br>
</html>