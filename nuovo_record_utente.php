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
    require('stripvowels.php');
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
            $query = "SELECT id from utenti ORDER BY DESC LIMIT 1";
            $lastId = mysqli_query($link, $query);
            $currendId = $lastId + 1;
            $codice = getConsonants($cm).$lastId;
            $cd = mysqli_real_escape_string(trim($codice));
            $q = "INSERT into utenti(nome_utente, cognome_utente, codice_utente) VALUES ('$nm', '$cm','$cd')";
        }
        
    }
    ?>
</body>
</html>