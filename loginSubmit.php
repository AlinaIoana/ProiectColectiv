<?php
// Begin our session
session_start();

// Validate the user data
if (isset( $_SESSION['userId'])) {
    $message = 'Users is already logged in';
}

if (!isset($_POST['userName'], $_POST['password'])) {
    $message = 'Please enter a valid username and password';
} else {
    // Strip tags and remove or encode unwanted characters.
    $userName = filter_var($_POST['userName'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    
    // Connect to database
    $mysql_hostname = 'localhost';
    $mysql_username = 'root';
    $mysql_password = '';
    $mysql_dbname = 'proiect';

    try {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// Check if the user name and password exists in DB
        $stmt = $dbh->prepare("SELECT id_utilizator FROM utilizator WHERE username = :userName AND parola = :password");

        // Bind params
        $stmt->bindParam(':userName', $userName, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        $userId = $stmt->fetchColumn();

        if ($userId == false) {
                $message = 'Login Failed';
        } else {
				// Save the user id in Session 
                $_SESSION['userId'] = $userId;
                $message = $_SESSION['userId'] . 'You are now logged in';
				echo($message);
        }
    }
    catch(Exception $e) {
        $message = 'We are unable to process your request. Please try again later"';
    }
}
?>

<html>
<head>
<title>Login Submit</title>
</head>
<body>
<?php if(isset($_SESSION['userId'])) { ?>
	<h2>Logout Here</h2>
	<ul>
		<li><p><a href="Logout.php">Log Out Link</p></li>
		<li><p><a href="persoane-morminte/contract.html">Mergi la pagina Concesionar</p></li>	
		<li><p><a href="persoane-morminte/decedati.html">Mergi la pagina Decedati</p></li>
		<li><p><a href="registre/registre.html">Mergi la pagina Registre</p></li>
		<li><p><a href="rapoarte/rapoarte.html">Mergi la pagina Rapoarte</p></li>
		<li><p><a href='persoane-morminte/istoric.php'>Istoric</a></p></li>
	</ul>
		
<?php } else { ?>
	<p><?php echo $message; ?></p>
	<p><a href="LoginExample.php">Try again</p>
<?php } ?>

</body>
</html>