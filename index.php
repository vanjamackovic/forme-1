<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stil.css">
    <meta charset="UTF-8">
    <title>Upitnik</title>
</head>
<body>
<h1>Upitnik</h1>

<p>

<form method="post">
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    Spol:<br>
    <input type="radio" name="spol" value="M">Muško<br>
    <input type="radio" name="spol" value="Ž">Žensko<br>
    <input type="submit" value="Pošalji!">

</form>

<?php
echo('<br>');
if($_POST['spol'] == 'M')
{
    echo('Vaše ime je: ' . htmlspecialchars($_POST['ime']) . '<br>');
    echo('Vaše prezime je: ' . htmlspecialchars($_POST['prezime']) . '<br>');
    echo('Vaš spol je: ' . htmlspecialchars($_POST['spol']) . '<br>');
    echo('Vi ste muškarac!');
}
elseif($_POST['spol'] == 'Ž')
{
    echo('Vaše ime je: ' . htmlspecialchars($_POST['ime']) . '<br>');
    echo('Vaše prezime je: ' . htmlspecialchars($_POST['prezime']) . '<br>');
    echo('Vaš spol je: ' . htmlspecialchars($_POST['spol']) . '<br>');
    echo('Vi ste žena!');
}
?>

</p>

</body>
</html>
