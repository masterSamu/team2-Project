<?php
  include 'database.php';


session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$tele = $_SESSION['tele'];
$mes = $_SESSION['mes'];

$sqlcontact="INSERT INTO customers (name, email, tele, mes)
	VALUES ('$name', '$email', '$tele', '$mes')";


if($conn->query($sqlcontact) === TRUE) {

    echo "New records added";
    session_destroy();
}
else
{
    echo "ERROR: " .$sqlcontact. "<br>" . $conn->error;

}
$conn->close();

?>
<br><a href="home.php" >
    <button type="submit" id="homeBtn" action="home.php">Return to home page</button>
</a>
?>