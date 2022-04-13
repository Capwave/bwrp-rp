<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
 
echo "Hallo User: ".$userid;
?>
<html>
    <head>
        <title>Bundeswehr Dortmund RP</title>
    </head>
    <body>
        <div>Bundeswehr</div>
        <form action="logout.php" method="POST">
  <input type="submit" value="Abmelden"/>
</form>
    </body>
</html>