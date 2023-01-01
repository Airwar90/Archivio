<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creazione Utente</title>
</head>
<body>
<div class="container">
<form action="nuovo_record_utente.php" method="post">
NOME: <input type="text" name="nome" class="form-control"  
value="<?php if (isset($_POST['nome_utente'])) echo $_POST['nome_utente']; ?>  ">

<form action="nuovo_record_utente.php" method="post">
COGNOME: <input type="text" name="cognome" class="form-control"  
value="<?php if (isset($_POST['cognome_utente'])) echo $_POST['cognome_utente']; ?>  ">

<input type="submit">
</div>
</body>
</html>