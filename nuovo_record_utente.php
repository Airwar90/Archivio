<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require('connect_db.php');
        $errors = array();
        if (empty($_POST['nome_utente'])) {$errors[]= 'Inserire nome';}
        else {
            $nm = mysqli_real_escape_string($link, trim($_POST['nome_utente']));
        }
        if (empty($_POST['cognome_utente'])) {$errors[]= 'Inserire cognome';}
        else {
            $cm = mysqli_real_escape_string($link, trim($_POST['cognome_utente']));
        }
        if empty($errors) {
            $cd = 
            $q = "INSERT into utenti(nome_utente, cognome_utente, codice_utente) VALUES (ì$nm', '$cm', '$cd')";
        }
        
    }
    ?>
</body>
</html>