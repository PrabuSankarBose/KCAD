<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/result.css">
</head>
<body>
   <div>
       Welcome Your email address is: <?php echo $_POST["email"]; ?><br>
       Your Password  is: <?php echo $_POST["pwd"]; ?>
       <br>
    </div>
    <h1>
        <?php
        $demo=phpversion();
        echo $demo;
        ?>
    </h1>
</body>
</html>