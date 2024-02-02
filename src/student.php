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
            <li><a href="../index.html">Home</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="admission.php">Admission</a></li>
            <li><a href="student.php">Student's Portal</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">About us</a></li>
        </ul>
    </div>
    <!-- form start here -->
    <div id="login-form">
        <h2>Welcome to Student login portal</h2>
        <div id="form_id">
            <div id="login-tab1">
                <div id="sign-in-form">
                    <button id="sign-in-button" class="label_fields" onclick="sign_in()">Sign-in</button>
                    <button id="sign-up-button" class="label_fields" onclick="sign_up()">Sign-up</button>
                </div>
            </div>
            <div id="login-tab2">
                <div id="sign-in-tab">
                    <div id="sign-in-cre">
                        <form name="signin_form" action="result.php" method="post">
                            <table><tr><td>
                                <label class="fields label_fields" >Roll-no</label></td><td>
                                <input class="fields"  type=text name="roll-no-signin" id="roll-no-signin"  autofocus></td></tr><tr><td>
                                <label class="fields label_fields" >Password</label></td><td>
                                <input class="fields"  type=password name="pwd-signin" id="pwd-signin" ></td></tr><tr><td colspan="2" style="text-align:center">
                                
                                <input class="fields"  type=submit value = "submit" id="submit-login"></td></tr>
                                </table>
                        </form>
                    </div>
                </div> 
                    
                <div id="sign-up-tab">
                    <div id="sign-up-cre">
                        <form name="signup_form" action="result.php" method="post" onsubmit = "return signup_validation()">
                            <table><tr><td>
                                <label class="fields label_fields">Roll Number</label></td><td>
                                <input class="fields" type=number name="roll-no" id="roll-no" min="1001" max="9999" required></td><td>
                                <label class="fields label_fields">Full Name</label></td><td>
                                <input class="fields" type=text name="user-name-signup" id="user-name-signup"></td></tr><tr><td>
                                <label class="fields label_fields">E-mail</label></td><td>
                                <input class="fields" type=text name="email" id="email"></td><td>
                                <label class="fields label_fields">Address</label></td><td>
                                <textarea class="fields" id="address" name="address"     required></textarea></td>
                                </tr><tr><td>
                                <label class="fields label_fields">Date of Birth</label></td><td>
                                <input class="fields" type=date name="dob" id="dob"  required></td><td>
                                <label class="fields label_fields">Gender</label></td><td style="display:flex">
                                <label class="fields label_fields">Male</label>
                                <input class="fields" type=radio name="gender" id="male" value = "male"  required>
                                <label class="fields label_fields">Female</label>
                                <input class="fields" type=radio name="gender" id="female" value = "female"  required></td></tr>
                                <tr><td>
                                <label class="fields label_fields">Phone Number</label></td><td>
                                <input class="fields" type=text name="phone-no" id="phone-no" pattern="[0-9]{10}" required></td>
                                <td>
                                <label class="fields label_fields">Photo</label></td><td>
                                <input class="fields" type=file name="photo" id="photo" required></td></tr><tr><td>
                                <label class="fields label_fields">Password</label></td><td>
                                <input class="fields" type=password name="pwd-signup" id="pwd-signup" required></td><td>
                                <label class="fields label_fields">Confirm Password</label></td><td>
                                <input class="fields" type=password name="cpwd-signup" id="cpwd" required></td></tr>
                                <tr><td colspan="4" style="text-align:center">
                                <input class="fields" type=submit></td></tr>                     
                            </table> 
                        </form>                       
                    </div>    
                </div>
            </div>    
        </div>

    </div>



 <script src="../js/student.js">
    document.getElementById("submit-login").addEventListener("click", signin_validation);
    function signin_validation()
    {
        
        let rollno = document.getElementsById("roll-no-signin").value;
        let password = document.getElementsById("pwd-signin").value;
        if ( rollno == "" && password == "" ) 
        {
           alert("No fields must be empty");
           return false;
           
        }
    }


 </script>   
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