<?php
$email_error = "";
$pswd_error = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    // Validate login form
    if (isset($_POST['login'])) {
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
require_once 'header.php';
?>

<div id="login_form">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <input type="email" name="username" id="email" placeholder="Email"><? echo $email_error;?><br>
        <input type="password" name="password" id="password" placeholder="password"><? echo $pswd_error;?><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>
<div id="login_intro">
    <h1>Welcome!</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec ipsum risus. In vitae purus rutrum, aliquet sapien at, volutpat metus. Maecenas luctus est ut erat rhoncus, sit amet placerat ipsum malesuada. Nam et felis orci. Aenean sit amet mi et turpis mattis ultrices et in tortor. Suspendisse dictum justo elit, sit amet hendrerit ex consectetur nec. In leo leo, tempor vitae maximus sit amet, lacinia ut orci.
    </p>
    <p>
        Proin lacinia hendrerit lobortis. Mauris ut quam nisl. Mauris fermentum accumsan orci, id condimentum massa molestie quis. Suspendisse porttitor ligula vel turpis pharetra ultricies. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat condimentum tristique. Nam accumsan libero id odio eleifend lobortis.
    </p>
</div>
<?php require_once 'footer.php'; ?>