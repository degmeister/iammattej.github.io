<?php
    error_reporting (E_ALL ^ E_NOTICE^ E_DEPRECATED);
    session_start();
    $id = $_SESSION['id'];
    $email = $_SESSION['email'];
 /*   if (!isset($_SESSION['email']))
    {
        header('Location: index.php');
        exit();
    }
    require("connect.php");
    $sql = mysql_query("SELECT `namn` FROM users WHERE id ='$id' limit 1");
    $namn = mysql_result($sql,1);*/
?>
<!DOCTYPE html>
<html lang="sv">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>Gymnasiearbete</title>
        <script src="JavaScript.js"></script>
        <link href="StyleSheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="storbox" class="indexpage">
            <header>
                <h1>Gymnasiearbete</h1>
    </body>
</html>