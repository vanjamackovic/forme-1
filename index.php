<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Naslov</title>
</head>
<body>
<h1>Prvi</h1>

<p>

<form>
    Ime:<br>
    <input type="text" name="ime"><br>
    Prezime:<br>
    <input type="text" name="prezime"><br>
    <input type="submit" value="Idu dani!">
</form>

<?php
echo('Vaše ime je: ' . htmlspecialchars($_GET['ime']) . '<br>');
echo('Vaše prezime je: ' .$_GET['prezime']);
?>

</p>

</body>
</html>
