<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/student.css">
</head>
<body>
    <div id="notification">
        <div>LATEST NEWS</div>
        <marquee>Latest notification: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, sapiente!</marquee>
        
    </div>
    <div id="header"><a href="index.php">
        <img id="logo" src="../img/enterance.jpg" alt="enterance image"></a>
        <h1 id="title">K.C.A.D Chidambaram Gnangiri Matric Hr.Sec School</h1>
    </div>
    
    <div id="nav_bar">
        <ul>
            <li>Home</li>
            <li>Gallery</li>
            <li>Admission</li>
            <li><a href="student.php">Student's Portal</a></li>
            <li>Contact</li>
            <li>About us</li>
        </ul>
    </div>
    <!-- form start here -->
    <div id="login-form">
        <h2>Welcome to Student login portal</h2>
        <form action="result.php" method="post">
            <div class="form-group">
                <div id="sign-in-form">
                    <div id="sign-in-button">Sign-in</div>
                    <div id="sign-up-button">Sign-up</div>
                </div>
            </div>
            <div class="form-group">
                <form action="result.php" method="post">    
                <div id="sign-in-tab">
                    <div id="sign-in-cre">
                        <label class="fields" >User Name</label>
                        <input class="fields"  type=text name="user-name" id="user-name">
                        <label class="fields" >Password</label>
                        <input class="fields"  type=password name="pwd" id="pwd">
                        <input class="fields"  type=submit>
                    </div>
                </div> 
                    
                <!-- <div id="sign-un-tab">
                    <div id="sign-up-cre">
                        <label>Roll Number</label>
                        <input type=number name="roll-no" id="roll-no">
                        <label>Full Name</label>
                        <input type=text name="user-name" id="user-name">
                        <label>Address</label>
                        <textarea name="address" rows="10" cols="30"></textarea>
                        <label>Phone Number</label>
                        <input type=number name="phone-no" id="phone-no">
                        <label>Password</label>
                        <input type=password name="pwd" id="pwd">
                        <label>Confirm Password</label>
                        <input type=password name="c-pwd" id="c-pwd">
                        <input type=submit>                     
                        
                    </div>    
                </div> -->
            </div>    
        </form>

    </div>



    
</body>
</html>
<!-- connection to db -->
        <!-- <?php
            $conn = new mysqli("localhost","root","","demo");
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            else
            {
                echo "Connection successfull";
            }



        ?> -->