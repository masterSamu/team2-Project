<?php
  include 'database.php';


$name = $_POST['name'];
$email = $_POST['email'];
$tele = $_POST['tele'];
$mes = $_POST['mes'];

$sqlcontact="INSERT INTO contact (name, email, tele, mes)
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