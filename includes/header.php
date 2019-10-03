<?php
$menu = [
    ['label' => 'Home', 'url' => 'main.php'],
    ['label' => 'Contacts', 'url' => 'form.php'],
    ['label' => 'Drop', 'url' => 'grab.php'],
];
include 'texts.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<nav>
    <ul>
        <?php foreach ($menu as $entry) : ?>
            <li><a href="<?= $entry['url'] ?>"><?= $entry['label'] ?></a></li>
        <?php endforeach; ?>
    </ul>

    <form action="request.php" method="POST">
        <input id="search" type="text" placeholder="search..." name="q">
        <button name="search" type="submit"></button>
    </form>

    <i class="fas fa-bars"></i>
</nav>
<div class="clearer">
</div>
