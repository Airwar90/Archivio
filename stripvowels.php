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
        function getConsonants($str) {
            $len = strlen($str);
            $lower = strtolower($str);
            $strArr = str_split($lower);
            $vowels = array('a', 'e', 'i', 'o', 'u');
            $cons = array();
            for ($i = 0; $i < $len; $i++) {
                if (!in_array($strArr[$i], $vowels)) {
                    array_push($cons, $strArr[$i]);
                }
            } 
            $consStr = implode($cons);
            return $consStr;  
        }               
    ?>
</body>
</html>