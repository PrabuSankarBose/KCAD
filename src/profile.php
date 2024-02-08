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
        <img id="logo" src="../img/badge_black.png" alt="enterance image"></a>
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
                
   <div>
       <?php
            try
            {
                $conn = new mysqli("localhost","root","","KCAD");
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM student";
                $sq2 = "SELECT * FROM ranklist";
                $result1 = $conn->query($sql);
                $result2 = $conn->query($sq2);
                if (mysqli_num_rows($result1) > 0) 
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result1)) 
                    {
                        if($row["rollno"] == $_POST["roll-no-signin"] and $row["pass_word"] == $_POST["pwd-signin"])
                        {

                            $rollno = $row["rollno"];
                            $name = $row["name"];
                            $gender = $row["gender"];
                            $email = $row["email"];
                            $address = $row["address"];
                            $dob = $row["dateofbirth"];
                            $phone_no = $row["phoneno"];
                            $standard = $row["standard"];
                            while($row1 = mysqli_fetch_assoc($result2)) 
                            {
                                if($row1["rollno"] == $rollno)
                                {

                                    $english = $row1["english"];
                                    $language = $row1["language"];
                                    $maths = $row1["maths"];
                                    $science = $row1["science"];
                                    $social = $row1["social"];
                                    $total = $row1["total"];
                                    $rank = $row1["rank"];
                                
                                }
                            
                                else
                                {
                                    echo "Roll-no: " . $_POST["roll-no-signin"]. " -total: " . $_POST["pwd-signin"]. " is wrong " ."<br>" ."in mark section";
                                }

                            }

                        }

                        else
                        {
                            echo "Roll-no: " . $_POST["roll-no-signin"]. " -Password: " . $_POST["pwd-signin"]. " is wrong " ."<br>"."in main section";
                        }

                    }
                }
                else 
                {
                    echo "0 results";
                }
            }
            catch(Exception $e) 
            {
                echo $e;
            }
        ?>


        <div id="studprofile">
            <div id="sidebar">
                <ul>
                    <li>Profile</li>
                    <li>Fees Structure </li>
                    <li>Materials</li>
                    <li>Recorded Classes</li>
                    <li>Test Results</li>
                    <li>Class Teacher</li>
                    <li>Class Teacher</li>
                </ul>

            </div>
            <div id="details">
                <div id="profile-div">
                    <div id="profile-1">
                        <image>
                            <img src="../img/userimg.jpeg" alt="profile pic" id="profpic">
                        </image>
                        <div>
                            <label for="name">Name</label>
                            <text><?php echo $name; ?></text>
                        </div>
                        <div>
                            <label for="roll-number">Roll-No</label>
                            <text><?php echo $rollno; ?></text>
                        </div>
                        <div>
                            <label for="standard">Standard</label>
                            <text><?php echo $standard," <sup>th</sup>"; ?></text>
                        </div>
                    </div>
                    <div id="profile-2">
                        <h3><?php echo $email; ?></h3>
                        <h3><?php echo $phone_no; ?></h3>
                        <h3><?php echo $address; ?></h3>
                        <h3><?php echo $dob; ?></h3>
                        <h3><?php echo $gender; ?></h3>
                        <h3><?php echo $english; ?></h3>

                    </div>
                </div>
                <div id="test_result">

                </div>
            </div>
        </div>


        <?php
        $conn->close();
        ?>
    </div>
    
   <script src="../js/profile.js"></script>
</body>
</html>