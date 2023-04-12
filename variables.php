<?php 
$username = "customer";
$password = "customer";

session_start();
 ?>

<!DOCTYPE html>
<html lang="en"> <!-- this specifies that the language in the document is english -->
<head>
	<!-- These are the meta tags so the webpage can be identified by a search engine -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- This links to the CSS stylesheet -->
	<link rel="stylesheet" type="text/css" href="css-styles.css">
	<!-- This is the webpages title -->
	<title>Our Employees</title>
</head>
<body>
	<!-- This nav bar is for navigating between the home, about us, php configuration, and contact pages -->
	<nav class="nav-bar">
		<a href="index.html" class="nav-item">Home</a>
		<a href="aboutus.php" class="nav-item">About Us</a>
		<a href="configuration.php" class="nav-item">PHP Configuration</a>
		<a href="contactus.php" class="nav-item">Contact</a>
	</nav>
	<!-- This link bar is for navigating between the 8 assignments submitted throughout the course -->
	<div class="link-bar">
		<a href="foundations.php" class="nav-item">Module 1: Week 1 Foundations</a>
		<a href="variables.php" class="nav-item">Module 1: Week 1 Variables</a>
		<a href="forms.php" class="nav-item">Module 2: Week 2 Forms</a>
		<a href="arrays.php" class="nav-item">Module 3: Week 3 Arrays</a>
		<a href="sessions.php" class="nav-item">Module 4: Week 4 Sessions</a>
		<a href="cms_sessions.php" class="nav-item">Module 5: Week 5 CMS Sessions</a>
		<a href="database.php" class="nav-item">Module 6: Week 6 Database</a>
		<a href="cms_database.php" class="nav-item">Module 8: Week 8 CMS Database</a>
	</div>
	<?php 
		$employee1 = array("James Smith", "Director of Inventory", "jamessmith.php");
		$employee2 = array("Hannah Cruise", "Director of Public Relations", "hannahcruise.php");
		$employee3 = array("Angela Kennedy", "Director of Operations", "angelakennedy.php");
	?>

	<?php 
	if (isset($_SESSION['username'])) {
		echo "<h1>Welcome to the website ".$_SESSION['username']."</h1><br><br>";
		echo "<h1><?php echo 'Our Employees' ?></h1>";
		echo "<h4>$employee1[0] is the $employee1[1]. Their website can be found' <a href='$employee1[2]'>here</a> <br> <br>";
		echo "$employee2[0] is the $employee2[1]. Their website can be found' <a href='$employee2[2]'>here</a> <br> <br>";
		echo "$employee3[0] is the $employee3[1]. Their website can be found' <a href='$employee3[2]'>here</a> <br> <br></h4><br>";
		echo "<h3>Organizational Chart</h3>";
		echo "<img src='organizationalchart.png' width='400'>";


		
	}

	else{
		if ($_POST['username'] == $username && $_POST['password'] == $password) {
			$_SESSION['username'] = $username;

			echo "<script>location.href='variables.php'</script>";
		}
		else{
			echo "<script>alert('username or password was not correct.')</script>";

			echo "<script>location.href='sessions.php'</script>";
		}
	}
	?>
	







	<!-- A header to describe the content of the page -->
	

	

	<!-- Each employee's details are echoed by PHP -->
	

	<!-- The organizational chart for the employees listed above -->
	
	
	<br>
	<footer id="footer">
		<?php include "footer.php" ?>
	</footer>
</body>
</html>