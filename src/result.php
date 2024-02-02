<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/result.css">
</head>
<body>
    <div id="notification">
        <div>LATEST NEWS</div>
        <marquee>Latest notification: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, sapiente!</marquee>
        
    </div>
    <div id="header"><a href="../index.html">
        <img id="logo" src="../img/enterance.jpg" alt="enterance image"></a>
        <h1 id="title">K.C.A.D Chidambaram Gnangiri Matric Hr.Sec School</h1>
    </div>
    
    <div id="nav_bar">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="admission.php">Admission</a></li>
            <li><a href="student.php">Student's Portal</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About us</a></li>
        </ul>
    </div>
   <div>
   <?php
        $conn = new mysqli("localhost","root","","KCAD");
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            echo "Connection successfull";
        }

    ?>

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