<?php
$def_text = 'La frase che hai inserito è:' ;
$user_text = $_GET['text'];

$forbidden = $_GET['forbidden'];
$def_forbidden = 'La frase adesso contiene la parola da te censurata:' ;
$text_forbidden = str_replace($forbidden, '***', $user_text) ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1><?= $def_text ?></h1>
    <p><?= $user_text ?></p>

    <h1><?= $def_forbidden ?></h1>
    <p><?= $text_forbidden ?></p>
    
</body>
</html>