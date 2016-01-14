<?php
require_once '../header.php';

$email_error = "";
$pswd_error = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validate login form
    if (isset($_POST['register'])) {
        if (empty($_POST['email'])) {
            $email_error = "Email kohustuslik!";
        } else {
            echo $_POST['email'];
        }

        if (empty($_POST['password'])) {
            $pswd_error = "Password kohustuslik!";
        } else {
            echo $_POST['password'];
        }
    }
}
?>

<div id="registration_form">
    <h1>Register new user</h1>
    <form action="register.php" method="post">
        <label for="email">E-mail *</label><input type="email" name="username" placeholder="somename@somepath.ext"><? echo $email_error;?><br>
        <label for="password">Password *</label><input type="password" name="password" placeholder="password"><? echo $pswd_error;?><br>
        <label for="text">Eesnimi *</label><input type="text" name="first_name" placeholder="Rait"><? echo $name_error;?><br>
        <label for="text">Perenimi *</label><input type="text" name="last_name" placeholder="Avastu"><? echo $pname_error;?><br>
        <label for="email">Sünniaeg</label><input type="date" step="1" min="1940-01-01" name="synniaeg"><br>
        <input type="submit" name="register" value="Register">
    </form>
</div>

<?php require_once '../footer.php'; ?>
