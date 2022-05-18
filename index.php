

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['page'])) {
        include $_GET['page'] . ".php";
    } else {
        include "home.php";
    }
    ?>
    
    <footer>
        <div class="container">
            <small>Copyright &copy; All Rights Reserved. </small>
        </div>
    </footer>
</body>
