<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/profile.css">
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
    </div>
    <div id="studprofile">
        <div id="sidebar">
            <ul>
                <li>Profile</li>
                <li>Fees Structure </li>
                <li>Materials</li>
                <li>Recorded Classes</li>
                <li>Test Results</li>
                <li>Class Teacher</li>
            </ul>

        </div>
        <div id="details">
            <div>
                <img src="../img/userimg.jpeg" alt="profile pic" id="profpic">
            </div>




            
   <div>
       Welcome Your email address is: <?php echo $_POST["roll-no-signin"]; ?><br>
       Your Password  is: <?php echo $_POST["pwd-signin"]; ?>
       <br>
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
        $sql = "SELECT rollno,pass_word FROM student";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) 
        {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) 
            {
                if($row["rollno"] == $_POST["roll-no-signin"] and $row["pass_word"] == $_POST["pwd-signin"])
                {
                    echo "Roll-no: " . $row["rollno"]. " -Password: " . $row["pass_word"]. " " ."<br>";
                }
                else
                {
                    echo "Roll-no: " . $_POST["roll-no-signin"]. " -Password: " . $_POST["pwd-signin"]. " is wrong " ."<br>";
                }
            }
        }
        else 
        {
            echo "0 results";
        }
        
        $conn->close();
        $demo=phpversion();
        echo $demo;
        
    ?>

        </div>
    </div>  
   
</body>
</html>