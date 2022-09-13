<?php

$db = new PDO('sqlite:db/project_1.db');

$statement = $db->query("SELECT * FROM recipes");

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($rows)

?>

<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>project_1</title>
</head>

<body>
    <header>

    </header>

    <div>
        <h1>TEST TEXT</h1>
    </div>

    <footer>
        <h4><span>Contact Me</span></h4>
        <form>
            <input name="name" type="text"><br>
            <input name="email" type="email"><br>
            <textarea name="message"></textarea><br>
            <input type="submit" value="SEND" class="submit">
        </form>
    </footer>
</body>

</html>-->