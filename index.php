<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Naslov</title>
</head>
<body>
<h1>Prvi</h1>

<p>
    <?php
    echo("Pozrdav iz t0p c0cka");
    echo("<br>");
    echo(date("d.m.Y."));
    ?>
</p>

<p>
    <?php
    $dana_do_praznika = 45;
    echo('Do praznika je ostalo jos: <b> ' . $dana_do_praznika .'</b>');
    ?>
</p>
</body>
</html>
