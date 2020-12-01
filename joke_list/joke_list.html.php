<?php include_once $_SERVER['DOCUMENT_ROOT'] .
    '/welcome/includes/helpers.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Joke Lists : </title>
</head>
<body>
<h1>Joke List</h1>
<?php if (isset($joke_lists)): ?>
    <table>
        <tr><th>Joke Text</th><th>Joke Date</th></tr>
        <?php foreach ($joke_lists as $joke): ?>
            <tr>
                <td><?php htmlout($joke['joketext']); ?></td>
                <td><?php htmlout($joke['jokedate']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<p><a href="..">Return to JMS home</a></p>
<?php include '../logout.inc.html.php'; ?>
</body>
</html>