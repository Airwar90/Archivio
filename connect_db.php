<html>
<head>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
    <?php
        $link = mysqli_connect('localhost', 'root', '', 'mydb');
        if(!$link) {
            die('Could not connect to the server: '.mysqli_connect_error());
        }
        echo 'Connected';
    ?>
</body>
</html>