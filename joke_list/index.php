<?php
// Display search form
include $_SERVER['DOCUMENT_ROOT'] . '/welcome/includes/db.inc.php';
try
{
    $result = $pdo->query('SELECT joketext, jokedate FROM joke WHERE visible = "YES"');
}
catch (PDOException $e)
{
    $error = 'Error fetching authors from database!';
    include 'error.html.php';
    exit();
}

foreach ($result as $row)
{
    $joke_lists[] = array('joketext' => $row['joketext'], 'jokedate' => $row['jokedate']);
}
include 'joke_list.html.php';
?>