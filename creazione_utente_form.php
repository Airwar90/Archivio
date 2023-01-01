<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<form action="create_record.php" method="post">
ID: <input type="text" name="id" class="form-control"  
value="<?php if (isset($_POST['id'])) echo $_POST['id']; ?>  ">

<form action="nuovo_record_utente.php" method="post">
First Name: <input type="text" name="first_name" class="form-control"  
value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>  ">

<form action="create_record.php" method="post">
Last Name: <input type="text" name="last_name" class="form-control"  
value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>  "> <br>
<input type="submit">
</div>
</body>
</html>