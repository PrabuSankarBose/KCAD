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
    <div id="header"><a href="../index.html">
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
        <div id="form_id">
            <div class="form-group">
                <div id="sign-in-form">
                    <button id="sign-in-button" class="label_fields" onclick="sign_in()">Sign-in</button>
                    <button id="sign-up-button" class="label_fields" onclick="sign_up()">Sign-up</button>
                </div>
            </div>
            <div class="form-group">
                    
                <div id="sign-in-tab">
                    <div id="sign-in-cre">
                        <form action="result.php" method="post">
                            <table><tr><td>
                                <label class="fields label_fields" >User Name</label></td><td>
                                <input class="fields"  type=text name="user-name" id="user-name"></td></tr><tr><td>
                                <label class="fields label_fields" >Password</label></td><td>
                                <input class="fields"  type=password name="pwd" id="pwd"></td></tr><tr><td colspan="2" style="text-align:center">
                                <input class="fields"  type=submit></td></tr>
                            </table>
                        </form>
                    </div>
                </div> 
                    
                <div id="sign-up-tab">
                    <div id="sign-up-cre">
                        <table><tr><td>
                            <label class="fields label_fields">Roll Number</label></td><td>
                            <input class="fields" type=number name="roll-no" id="roll-no" min="1001" max="9999"></td></tr><tr><td>
                            <label class="fields label_fields">Full Name</label></td><td>
                            <input class="fields" type=text name="user-name" id="user-name"></td></tr><tr><td>
                            <label class="fields label_fields">Address</label></td><td>
                            <textarea class="fields" id="address" name="address" rows="10" cols="30"></textarea></td></tr><tr><td>
                            <label class="fields label_fields">Phone Number</label></td><td>
                            <input class="fields" type=number name="phone-no" id="phone-no" pattern=""></td></tr><tr><td>
                            <label class="fields label_fields">Password</label></td><td>
                            <input class="fields" type=password name="pwd" id="pwd"></td></tr><tr><td>
                            <label class="fields label_fields">Confirm Password</label></td><td>
                            <input class="fields" type=password name="c-pwd" id="c-pwd"></td></tr><tr><td colspan="2" style="text-align:center">
                            <input class="fields" type=submit></td></tr>                     
                        </table>                        
                    </div>    
                </div>
            </div>    
        </div>

    </div>



 <script src="../js/student.js"></script>   
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