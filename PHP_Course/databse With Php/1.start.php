<?php

$person = [
    [
        "title" => "new Age",
        "content" => "New Ages of wonder",
    ],
    [
        "title" => "12 Years of slave",
        "content" => "New  Slaves",
    ]
    ];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <ul>
        <?php   foreach($person as $art) :?>
        <li>

            <h2><?= $art['title']; ?> </h2>
            <p><?= $art['content']; ?> </p>

        </li>

        <?php   endforeach;   ?>
    </ul>
</body>

</html>