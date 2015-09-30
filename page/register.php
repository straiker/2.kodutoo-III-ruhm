<?php


require_once '../header.php';
?>

<div id="registration_form">
    <h1>Register new user</h1>
    <form action="login.php" method="post">
        <label for="email">E-mail *</label><input type="email" name="username" placeholder="somename@somepath.ext"><? echo $remail_error;?><br>
        <label for="password">Password *</label><input type="password" name="password" placeholder="password"><? echo $rpswd_error;?><br>
        <label for="text">Eesnimi *</label><input type="text" name="first_name" placeholder="Rait"><? echo $name_error;?><br>
        <label for="text">Perenimi *</label><input type="text" name="last_name" placeholder="Avastu"><? echo $pname_error;?><br>
        <label for="email">Sünniaeg</label><input type="date" step="1" min="1940-01-01" name="synniaeg"><br>
        <input type="submit" name="register" value="Register">
    </form>
</div>

<?php require_once '../footer.php'; ?>
