<html>

<head>
    <title>Form Page</title>
</head>

<body>
    <!-- <form action="2.GEt&Post.php" method="get"> -->
    <form action="2.GEt&Post.php" method="post">
        <!-- <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post"> -->
        Name : <input type="text" name="fname" id=""><br><br>
        Age : <input type="number" name="age" id=""><br><br>
        <input type="submit" name="submit" value="Submit">

    </form>


    <?php

    if(isset($_POST['submit'])){
        echo $_POST['fname'] ."<br>";
        echo $_POST['age'] ."<br>";
    }
    ?>

</body>

</html>