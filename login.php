<?php
$conn = mysqli_connect("localhost","root","","angularjs");

$array = json_decode(file_get_contents("php://input"));
if($array) {
    $username = mysql_real_escape_string($conn,$array->username);
    $passwort = mysql_real_escape_string($conn,$array->passwort);
    $btnName = $array->btnName;
    $adminuser="admin";
    $adminpass="administrator";
    if($btnName == "Login") {
        $query = "select user,passwort from signup";
        $result = mysqli_query($conn,$query);
        if($username==$adminuser && $passwort==$adminpass) {
            echo "Login Erfolgreich"
        }
        while($r = mysqli_fetch_array($result)) {
            $user=$r['user'];
            $pass=$r['passwort'];
            if($username==$user && $passwort==$pass) {
                echo "Login Erfolgreich"
                exit();
            }
        }
        if($username != $adminuser || $passwort != $adminpass) {
            echo "Login Erfolgreich"
        }
    }
}
?>
