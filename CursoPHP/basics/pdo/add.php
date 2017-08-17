<?php

require_once 'config.php';
$isQuerySuccess = false;
if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $sql = "insert into users(name, email, password) VALUES (:name, :email, :password) ";
    $query = $pdo->prepare($sql);

    $isQuerySuccess = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Databases</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1>Add User</h1>
    <a href="index.php">Home</a>
    <?php
    if ($isQuerySuccess) {
        echo "<div class='alert alert-success'><strong>Success!</strong> data has been saved</div>";
    }
    ?>
    

	<form action="" method="post">
    <label for="nameid">Name</label>
    <input type="text" name="name" id="nameid">
    <br>
    <label for="emailid">Email</label>
    <input type="text" name="email" id="emailid">
    <br>
    <label for="passwordid">Password</label>
    <input type="password" name="password" id="passwordid">
    <br>
    <input type="submit" value="Save">
    </form>
</div>
</body>
</html>
